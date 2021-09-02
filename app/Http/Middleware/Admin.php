<?php

namespace App\Http\Middleware;
// use Auth;
use Illuminate\Support\Facades\Auth;

use Closure;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(Auth::check()){
            return $next($request);
            }
           return redirect('/')->with('error',"Only admin can access!");
           
        //return redirect('/Admin')->with('error',"Only admin can access!");
    }
}
