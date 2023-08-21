<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()){
            if(Auth::user()->role == '565001'){
                return $next ($request);
            }else{
                return redirect()->back()->with('message-for-admin' , 'You are Not Admin');
            }
        }else{
            return redirect('/login')->with('message-for-admin', 'Login to Access The admin panel');
        }
    }
}
