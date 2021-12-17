<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\session;


class profile2Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        /*
              if( $request->session()->has('ok2')){
                //return redirect()->To('/');
                dd('kk');
                
              }else{
                $request->session()->flash('ok','right info please');  
                return $next($request);
                
              }*/
              //dd("kk");

                if (Session::has('test1')) {
                echo  "has exist" ;
                echo Session::get('test1');
               // return Session::get('test1');
                return $next($request);

            }else{
                //return "no exist session start please";
                return redirect()->To('/');
            }



            }
}
