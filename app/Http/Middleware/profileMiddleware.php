<?php

namespace App\Http\Middleware;

use Closure;
use App\Teacher;
use Illuminate\Support\Facades\session;

class profileMiddleware
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
        
         //return $next($request);

        $teacher=Teacher::find(1);
        //return $teacher->email;

    if ('ajoblove79@gmail.com' == $teacher->email) {  // ata controller a check kore jodi data mile jay tahole session start hobe... 
                                                    //middleware a session start pele $next($request)  otherwise redirect()->To('/');
        //session()->flash('ok','okk ');
        $request->session()->flash('ok','this is flash');
        //session::flash('ok', 'tish is flassh');
        return $next($request);     
        }else{
            $request->session()->flash('ok','this flash is original');  // ata 1 bar show korbe
            return redirect()->To('/'); 
        }




        


    }
}
