<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\User;
use App\Vdim;
class VedioController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

        public function create(){
    	//return "this is Video" ;
        	   $User=User::create([
        	     'name'=>'newName',
        		'email'=>'e@email.com',



        	        	]);
    }

    public function create2(){
        $data=DB::table('vedios')->insert([
            'vne'=>'Vname2'

        ]);
    }


    public function create3(){
        Vdim::create([
            'vne'=>'Vname3',

        ]);
    }
    public function create4(){
        $Vdim=new Vdim([
             'vne'=>'Vname4',

        ]);
        $Vdim->save();
    }
        public function create5(){
        $Vdim=new Vdim([
             'vne'=>'Vedio_nam9',
             'v_type'=>'Funnyve4',
             'user_id'=>'1',
             'email_verified_at'=>now(),

        ]);
        $Vdim->save();
    }
    public function show(){
        $Vdim=Vdim::all();
        return " test";

        //return dd($Vdim);
        // echo $Vdim;
       // return view('vedio',compact('Vdim'));
    }
        public function show2($id){
        $Vdim=Vdim::find($id);   // non property object  dekhano mane url a id ta change korte hobe.
        //$Vdim=Vdim::findOrFail($id);

        //return view('vedio',compact('Vdim'));

        //return dd($Vdim); //$Vdim->user->name;
        //return dd($Vdim->user->name);
        //return dd($Vdim->user);

        //dd($Vdim->photos); // mamny to many 
        foreach ($Vdim->photos as $value) {  // many to many
            echo $value->vname;
        }
    }




    public function cr(){
    	//$n="10";
    	return view('v2.v2',['n'=>'qq']);
    }

    public function datapas(){
    	$data=[
    		'a'=>'hi',
    		'b'=>'hellow',
    		'c'=>'how is going on',
    		'd'=>[1,2,3]


    	];

       // return "hellow";
    	 	$User=User::all(); // akhane $User variable and model and compact('User') same hote hobe.
    	return view('vedio',compact('User'));

    	//$users=DB::table('users')->get();
    	//return view('vedio',$users); avabe pathano jabe na
    	//return dd($users); // avabe akhane possible

    	//return dd($data);
    	//return view('vedio',$data);
    	




    	//$dat=DB::table('users')->get();
    	
        //return view('vedio',$dat); // direct a vabe pathano jabe na
        //return dd($dat);

    	





    	//return view('vedio',$data); // hobe but vedio page a echo $c korte hobe . echo $data diye hobe na
    	    	//return view('vedio',$User); hosce na
     	
    	//return view('vedio',compact($da)); // hosce na
    	
    	//return view('vedio',$da); //hosse na

    	





    }


}