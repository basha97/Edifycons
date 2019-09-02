<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Libraries\UploadHandler;

//models
use App\MenuMaster;
use App\MenuMeta;
use App\CourseMeta;
use App\Course;

class CourseController extends Controller
{
   public function index(){
      $menu =  MenuMaster::where('status','active')->where('type','sub')->get();
      return view('backend/course/add',compact('menu'));
   }

   public function editcourse($id){
      $record =  Course::where('id',$id)->with('course_content')->get();
      $menu =  MenuMaster::where('status','active')->where('type','sub')->get();
      return view('backend/course/edit',compact('menu','record'));
   }

   public function editcoursepost(Request $req){
      $data =  $req['course'];
      try {
         $course  =  Course::where('id',$data['id'])->update(
            [
               'course_name'                 => $data['course_name'],
               'menu_id'                     => $data['menu_id'],
               'course_img_url'              => $data['course_short_description'],
               'course_short_description'    => $data['id'],
               'course_long_description'     => $data['course_long_description'] 
            ]
         );
         foreach ($data['course_content'] as $meta) {
            $metaData   =  CourseMeta::updateOrCreate(
               ['id' => $meta['id']],
               ['title' => $meta['title'] , 'description'   => $meta['description']]
            );
         }
         return response()->json(['status' => true]);
      } catch (\Exception $e) {
         return response()->json(['status' => false , 'msg' => $e->getMessage(), 'line' => $e->getLine()]);
      }
   }

   public function addcoursepost(Request $req){
      $input                  =   $req->all();
      $course_data            =   $input['course'];
      $course_content_data    =   $course_data['course_content'];
      try {
         $course  =  new   Course();
         $course->course_name                =  $course_data['course_name'];;
         $course->menu_id                    =  $course_data['course_menu'];;
         $course->course_img_url             =  $course_data['course_img_url'];;
         $course->course_short_description   =  $course_data['course_short_description'];;
         $course->course_long_description    =  $course_data['course_long_description'];;
         $course->save();
         foreach ($course_content_data  as $cc) {
            $course_meta               =  new   CourseMeta();
            $course_meta->course_id    =  $course->id;
            $course_meta->title        =  $cc['course_content_title'];
            $course_meta->description  =  $cc['course_content_description'];
            $course_meta->save();
         }
         return response()->json(['status' => true]);
      } catch (\Exception $e) {
         return response()->json(['status' => false , 'msg' => $e->getMessage()]);
      }
   }

   public function manageaddcourse(){
      $course =  Course::where('status','!=','deleted')->get();
      return view ('backend/course/manage',compact('course'));
   }

   public function fileupload_ajax_course(Request $req){
      $options = array('accept_file_types' => '/\.(gif|jpe?g|png)$/i',
        'upload_dir' => 'uploads/',
        'upload_url' => 'uploads/',
        'image_versions' => array(),
      );
      $upload_handler = new UploadHandler($options);
    }

   public function changestatus(Request $req){
      $id               =  $req["id"];
      $coursse          =  Course::find($id);
      $previous         =  $course->status;
      $course->status  == "active" ? $current = "inactive" : $current = "active";
      $course->status  =  $current;
      $course->save();
      return response()->json(["success"=>true,'status'=>$current]);
    }

   public function subcoursesdetails($id){

      $getvalue = MenuMaster::where('menu_name',$id)->first();
      $record = Course::where('menu_id',$getvalue->id)->with('course_content')->get();
      
      return view('frontend/course/bigdata')->with('record',$record)->with('mastervalue',$getvalue);
   }

   public  function singlecourse(){
      return view('frontend/course/singlecourse');
   }

   public function  sub2coursesdetails($id){

     $record = Course::where('id',$id)->with('course_content')->first();
      return view('frontend/course/singlecourse')->with('record',$record);
   }
}
