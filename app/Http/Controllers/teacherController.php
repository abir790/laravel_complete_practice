<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Illuminate\Support\Facades\Hash;

class teacherController extends Controller
{
/*
        public function __construct(){
        $this->middleware('profile2');
    }*/

    public function index(){
    	$teacher=Teacher::all();
    	return view('teacher.index',compact('teacher'));
    }

    public function create(){
    	return view('teacher.create');
    }

    public function store(Request $request){
        	//$this->validate($request,[]);


    	$request->validate([
    		'name'=>'required',
    		'email'=>'required',
    	]);
    	
        	$data=$request->only('name','email');
        	$data['password']=Hash::make($request->get('password'));
        	Teacher::create($data);
        	//return $data;
        	return redirect('teacher');


    }



}
