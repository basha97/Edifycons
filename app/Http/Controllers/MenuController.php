<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Libraries\UploadHandler;

use App\Http\Requests;

use Response;
use Validator;

//Models
use App\MenuMaster;
use App\MenuMeta;

class MenuController extends Controller
{
    public function manage(){
         $record = MenuMaster::get();
        return view('backend/menu/index')->with('records',$record);
    }

    public function addmenu(){
    	$record = MenuMaster::get();
    	return view('backend/menu/add')->with('record',$record);
    }

    public function addmenupost(Request $req){
    	$req->all();
    	$menu_url = '/'.$req['url'];
    	$insert = new MenuMaster();
    	$insert->menu_name = $req['name'];
    	$insert->menu_url= $menu_url;
    	$insert->type = $req['type'];
    	$insert->status = $req['status'];
    	$insert->save();
        if($req['type'] == 'sub' || $req['type'] == 'sub2'){
            $record = new MenuMeta();
            $record->menu_id = $req['mainmenu'];
            $record->menu_name = $req['name'];
            $record->menu_url = $menu_url;
            $record->menu_image_url =  $req['filepath'];
            $record->save();
        }
    	return response()->json(['status'=>'success']);
    }

    public function fileupload_ajax_logo(Request $req){
      $options = array('accept_file_types' => '/\.(gif|jpe?g|png)$/i',
        'upload_dir' => 'uploads/',
        'upload_url' => 'uploads/',
        'image_versions' => array(),
      );
      $upload_handler = new UploadHandler($options);
    }


    public function changestatus(Request $req){
        $id = $req["id"];
        $company = MenuMaster::find($id);
        $previous = $company->status;
        $company->status == "active" ? $current = "inactive" : $current = "active";
        $company->status = $current;
        $company->save();
        return response()->json(["success"=>true,'status'=>$current]);
    }

    public function deletemenu(Request $req){
        $id = $req["id"];
        $company = MenuMaster::find($id);
        $company->status = "deleted";
        $company->save();
        return response()->json(["status"=>'success']);
    }

    public function editmenu($id){
      
        return$check = MenuMaster::where('id',$id)->with('subcourses')->first();
    }
    
}
