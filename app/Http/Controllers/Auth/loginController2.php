<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\student;

class loginController2 extends Controller
{
	        public function login(){
        return view('auth.login');
    }
        public function show(){
        $data=student::all();

        dd($data);

    }

    public function check(Request $request){
        //$data=$request->all();
        //$data=$request->email;
        //$data=$request->only('email','password');
        $data=$request->only(['email','password']);
        //$data=$request->only('email');
        //$data=$request->email;
        //$data['password']=Hash::make($request->get('password')); // for create hash 

        //return $data;
        
        if(Auth::attempt($data)){
            return redirect()->intended('vshow');
            //return " data match and login successfully";
        }else{
           return "Not match";
        }
    }
    public function logout(){
        Auth::logout();
        return "Logout successfully";
    }
}
