<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class sessionController extends Controller
{
    public function test1(){
    	//$request->session()->put('test1','This is test1 session'); //Request $request

    	session()->put('test1','This is test1 session'); // this is global session

    }

        public function test1_get(){
    	//return $request->session()->get('test1'); //Request $request
        	return session()->get('test1');  

    }

        public function test1_forget(){
    	//return $request->session()->forget('test1');  //Request $request
        	return session()->forget('test1');

    }

        public function test1_protect(){    //Request $request

        	
/*
        	if ($request->session()->has('test1')) {
        		echo  "has exist" ;
        		return $request->session()->get('test1');
        	}else{
        		return "no exist session start please";
        	}

        	   	if (session()->has('test1')) {
        		echo  "has exist" ;
        		return session()->get('test1');
        	}else{
        		return "no exist session start please";
        	}
        	*/

        	if (Session::has('test1')) {
        		echo  "has exist" ;
        		echo Session::get('test1');
        		//return Session::get('test1');
        	}else{
        		return "no exist session start please";
        	}


    }


}
