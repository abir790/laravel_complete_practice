<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
    	User::create([
    		'name'=>'Abir',
    		'email'=>'ab55@gmail.com',
            'password'=>Hash::make('55123456')

    	]);
    	return " user Insert success";
    }
        public function create2(){
    	$User=new User([
    		'name'=>'Apon',
    		'email'=>'apon@gmail.com'

    	]);
    	$User->save();
    	return " user2 Insert success";
    }

    public function show(){
    	$User=User::all();
       
        //return dd($User);

    	//return dd($User->Vdim->vne);  avabe hobe na coz id dhore single data view korte hoy
        //return view('user',compact('User'));
    }
        public function show2($id){
        $User=User::findOrFail($id);
        //echo $User->photos; // error dekhabe

        //$User=User::findOrFail($id);
        //echo $User->Vdim->vne;
        //return dd($User->Vdim);
        //echo $User->name;
        echo $User->Vdim->vne; //  ono to one er khetre join table er j kono akta name single vabe show kora jay but one to many te join table er sob gulo value aksathe print korte hoy but belongsTo te join er single value show kora jay

        //return dd($User->Vdim);
        //echo $User->Vdim;
        //return view('user',compact('User'));
    }
}
