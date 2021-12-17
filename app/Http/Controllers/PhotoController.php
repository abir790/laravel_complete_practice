<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Photo;
use App\Vdim;

class PhotoController extends Controller
{

/*
	public function createP(){
				$data=DB::table('photos')->insert([
								'vname'=>'photoName'


				]);

	}*/
		public function createP(){
			
			Photo::create([
                'user_id'=>'1',
				'vname'=>'photo5',
                'location'=>'Naogaon'


			]);

			/*
			$Photo=new Photo([
				'vname'=>'photoNew3'


			]);
			$Photo->save(); */
			/*
						$Photo=new Photo;

				$Photo->vname='photoNew2';
				$Photo->save();
				*/



			

	}

    public function create(){
    	//$data1=DB::table('photos')->get();
        //dd($data1);

        $Photo=Photo::all();
        //dd($data2);
        //return view('photo',compact($data2));
        return view('photoNew',compact('Photo'));





    	//return "this is Photo" ;
    	//return view('photo');
    	//$User=User::all();
    	//eturn view('photo', compact('User'));
    	//return view('photo', $User);
    }

    public function p(){
    	return "this is post";
    }

    public function show(){
       // $Photo=Photo::all();

        //foreach ($Photo as $value) {
          //  echo $value->user_id;
        //}
/*
        foreach ($Photo->user as $value) {
            echo $value->location;
        }*/




        //dd($Photo->users->);
        //dd($Vdim->user->name);
    } 

    public function show2($id){
        $Photo=Photo::findOrFail($id);
    	//return $id;
        //dd($Photo->user); // one to many
         //dd($Photo->user->name);  // one to mamy er khette foreach use korte hoy coz many array hisebe thake
        //dd($Photo->vname); // one to one
        //echo $Photo->user->name;


       // dd($Photo->Vdim->vne);  // for many to many a khetre error dekhabe cov vdim a onek gulo value ase tai foreach use korte hbe.


        return view('photoNew',compact('Photo'));


        
        //echo $Photo->user->name;
       // dd($Photo->user);

    } 
    /*
    public function sh($id){
    	return $id. "perameter" ;
    }*/

        public function sh($id,$email='aa@gmail'){
    	return $id. "perameter" .$email;
    }

}
