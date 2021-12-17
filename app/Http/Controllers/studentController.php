<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\student;

class studentController extends Controller
{
        public function create(){
    	student::create([
    		'name'=>'Abir',
    		'email'=>'ab55@gmail.com',
            'password'=>Hash::make('55123456')

    	]);
    	return " user Insert success";
    }
    public function show(){
    	$data=student::all();
    	dd($data);
    }

/*
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


    }*/
}
