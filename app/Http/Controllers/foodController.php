<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use DB;
use App\food;

class foodController extends Controller
{
    public function index(){
    	$food=Food::all();
    	//dd($food);
    	//dd($food);
       // return view('food.index',$food);
        return view('food.index',compact('food'));
    }
        public function create(){
        	return view('food.create');
    }
        public function store(Request $request){	
        	Food::create([
        		//'name'=>'MangoA',
        		'name'=>$request->name

        	]);
        	    	/*
    	DB::table('foods')->insert([
    		'name'=>'berry',
    	]);*/
    	//return $request->input('name');
    	return "Input successfully";
    }
    public function show($id){
        $food=Food::findorFail($id);
        //dd($food);
        //return $food->location;
        //return $location; // avabe akhane hobe na  view page a possible
        //return "single data show";
        //return view('food.show',$food); // single datar khettre avabe pathai view page a just $attributes  $variable a rup ney 
        return view('food.show',compact('food'));
        //dd($food->category->title);
        //echo $food->category->title;
    }
    public function edit($id){
    	$food=Food::find($id);
    	return view('food.edit',$food);
    	//return $id;
    	//echo $food->name;

    }
        public function update(Request $request, $id){
        $food=Food::find($id);
        $food->name=$request->name;
        $food->save();

        return "update successflly";

        //return view('food.edit',$food);
    }
    public function delete($id){
        $food=Food::find($id);
        $food->delete();

        return "Delete successfully";

    }
}
