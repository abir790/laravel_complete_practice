<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\session;


class profileController extends Controller
{
	public function __construct(){
		$this->middleware('profile');
	}

        public function profile(){

        //echo session::get('ok');

        //session::flash('ok', 'tish is flassh');
    	return view('protected.profile');
    }

}
