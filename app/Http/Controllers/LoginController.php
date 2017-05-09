<?php

namespace App\Http\Controllers;

use Auth;

use App\Http\Requests\LoginRequest;


class LoginController extends Controller{

	

	public function index(){
    	if(Auth::check()){
        	return redirect('index');
      	}else{
        	return view('login');
      	}
    }

    public function loginProcess(LoginRequest $req){
    	$username = $req->input('username');
      	$password = $req->input('password');

      	if(Auth::attempt(['uName' => $username,'password'=>$password])){
           	return redirect()->intended('index');
	    }else{
	        return redirect()->back()->with('message',"ผิดพลาด!! ไม่สามารถเข้าสู่ระบบได้.");
           	// return "login fail";
	    	
	    }

    }

    public function logout(){
    	Auth::logout();
      	return redirect('/');
    }

    
}
