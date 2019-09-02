<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use Auth;
use Hash;
use Validator;

class LoginController extends Controller
{
    public function login(){
        return view ('backend/logintest');
    }

    public function loginpost (Request $req){
        try{
			$input = $req->all();
			$rules = [
				"email"=>"required",
				"password"=>"required"
			];
			$validation = Validator::make($input, $rules);
			if($validation->fails()){
				return redirect()->back()->withErrors($validation);
			}

			if(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'], 'privilege'=>'admin', 'status' => 'active'))){
				$encode = Hash::make(time());
				$encode = str_replace('/', 'a', $encode);
	            $user = User::find(Auth::user()->id);
	            $user->lastLogin = date('Y-m-d H:i:s');
	            $user->encodeId = $encode;
	            $user->save();
	            return redirect()->route('home');
	        }elseif(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'], 'privilege'=>'company', 'status' => 'active'))){
	        	$user = User::find(Auth::user()->id);
	            $user->lastLogin = date('Y-m-d H:i:s');
	            $user->save();
	            return redirect()->route('home');
	        }elseif(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'], 'privilege'=>'customer', 'status' => 'active'))){
	        	$user = User::find(Auth::user()->id);
	            $user->lastLogin = date('Y-m-d H:i:s');
	            $user->save();
	       	return redirect()->route('home');
	        }elseif(Auth::attempt(array('email' => $input['email'], 'password' => $input['password'], 'privilege'=>'carrier', 'status' => 'active'))){
	        	$user = User::find(Auth::user()->id);
	            $user->lastLogin = date('Y-m-d H:i:s');
	            $user->save();
	       	return redirect()->route('carrierhome');
	        }

	       	return redirect()->back()->with("msg", "Enter the valid credentials");
	    }
	    catch(Exception $e){
			Trackingreport::track("error", $e->getMessage(), "", "", "User login");
			return redirect()->back()->with("msg", "Enter the valid credentials");
		}
    }
}
