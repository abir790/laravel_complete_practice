<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
        public function store(){
        	Category::create([
        		'title'=>'Meat',

        	]);
    }


        public function show($id){
        $category=Category::findorFail($id);

        //dd($category);
       
      // dd($category->food);
        //dd($category->food);
        //return view('food.show',compact('category'));
        return view('food.cat_show',compact('category'));

                //$User=User::findOrFail($id);
        //echo $User->photos;

        //$User=User::findOrFail($id);
        //echo $User->Vdim->vne;
        //return dd($User->Vdim);
        //echo $User->name;
        //echo $User->Vdim->vne; //  ono to one er khetre join table er j kono akta name single vabe show kora jay but one to many te join table er sob gulo value aksathe print korte hoy but belongsTo te join er single value show kora jay

        //return dd($User->Vdim);
        //echo $User->Vdim;
        //return view('user',compact('User'));
    }
}
