<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiryform;
use App\MenuMaster;


class MainController extends Controller
{
    public function index(){
        return view('frontend/index');
    }
    public function about(){
        return view('frontend/about');
    }
    public function contact(){
        return view('frontend/contact');
    }
    public function course(){
        return view('frontend/course');
    }
    public function test(){
        return view ('backend/index');
    }
    public function consultancy(){
        return view ('frontend/corporatetraining');
    }

    public function corporatetraining(){
        $record = MenuMaster::where('status','active')->where('type','sub')->with('submenucourses')->orderBy('id', 'asc')->take(4)->get();
        return view('frontend/corporatetrainingcopy')->with('record',$record);
    }

    public function enquirypost(Request $req){

        $insert = new Enquiryform();
        $insert->f_name =$req['fname'];
        $insert->l_name  =$req['lname'];
        $insert->email =$req['email'];
        $insert->p_number =$req['pnumber'];
        $insert->company =$req['company'];
        $insert->num_employee =$req['employee'];
        $insert->country = $req['country'];
        $insert->save();
        return response()->json(['status' => true]);

    }
}
