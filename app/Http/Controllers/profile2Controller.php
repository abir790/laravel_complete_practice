<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\session;
use App\Teacher;

class profile2Controller extends Controller
{



        public function profile2(){
    	return view('protected.profile2');
    }

    public function sd(){
    	session::flush();
    }

}
