<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\student;

class LoginController extends Controller
{
        public function login(){
        return view('auth.login');
    }
        public function show(){
        $data=student::all();

        dd($data);

    }

    public function check(Request $request){
        //$data=$request->all();
        //$data=$request->email;
        //$data=$request->only('email','password');
        $data=$request->only(['email','password']);
        //$data=$request->only('email');
        //$data=$request->email;
        //$data['password']=Hash::make($request->get('password')); // for create hash 

        //return $data;
        /*
        if(Auth::attempt($data)){
            //return redirect()->intened('vshow');
            return " data match and login successfully";
        }else{
           return "Not match";
        }*/
    }
    public function logout(){
        Auth::logout();
        return "Logout successfully";
    }


    public function pp(){
        return "pp";
    }
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    //protected $redirectTo = '/vshow';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
