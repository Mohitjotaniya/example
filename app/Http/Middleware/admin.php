<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if( Auth::check())
    //     {
    //         return $next($request);
    //         }
    //        return redirect('/Admin')->with('error',"Only admin can access!");
        
    // }
}
