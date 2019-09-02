<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function () {
    Route::get('login', 'LoginController@login')->name('login');
    Route::post('login/post', 'LoginController@loginpost')->name('loginpost');
});



Route::get('/','MainController@index')->name('index');
Route::get('aboutus','MainController@about')->name('about');
Route::get('contactus','MainController@contact')->name('contact');
Route::get('course','MainController@course')->name('course');
Route::get('consultancy','MainController@consultancy')->name('consultancy');


Route::get('corporatetraining','MainController@corporatetraining')->name('corporatetraining');

Route::post('enquirypost','MainController@enquirypost')->name('enquirypost');

//course controller


Route::get('/singlecourse','CourseController@singlecourse')->name('singlecourse');

Route::get('/subcoursesdetails/{id}','CourseController@subcoursesdetails')->name('subcoursesdetails');
Route::get('sub2coursesdetails/{id}','CourseController@sub2coursesdetails')->name('sub2coursesdetails');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => '/backend/'], function () {
        Route::get('index', 'BackendController@home')->name('home');
    
        Route::group(['prefix' => 'menu/'], function () {
            Route::get('menu/manage', 'MenuController@manage')->name('managemenu');
            Route::get('menu/add', 'MenuController@addmenu')->name('addmenu');
            Route::post('menu/add', 'MenuController@addmenupost')->name('addmenupost');
            Route::get('menu/edit/{id}', 'MenuController@editmenu')->name('editmenu');
            Route::post('menu/edit/{id}', 'MenuController@editmenupost')->name('editmenupost');
            Route::post('menu/delete', 'MenuController@deletemenu')->name('deletemenu');
            Route::post('menu/fileupload','MenuController@fileupload_ajax_logo')->name('logofileupload');
            Route::post('menu/changestatus','MenuController@changestatus')->name('menustatus');
        });

        Route::group(['prefix' => 'course/'], function () {
            Route::get('manageaddcourse', 'CourseController@manageaddcourse')->name('managecourse');
            Route::get('addcourse', 'CourseController@index')->name('addcourse');
            Route::post('addcoursepost', 'CourseController@addcoursepost')->name('addcoursepost');
            Route::post('status','CourseController@changestatus')->name('coursestatus');
            Route::get('editcourse/{id}', 'CourseController@editcourse')->name('editcourse');
            Route::post('editcoursepost','CourseController@editcoursepost')->name('editcoursepost');
        });
        

    });
    
    Route::get('/logout', 'BackendController@logout')->name('logout');
    
});