<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class BackendController extends Controller
{
    public function home(){
        return view ('backend/index');
    }

    public function logout(){
    	Auth::logout();
		Session::flush();
		return redirect()->route('login');
    }
}
