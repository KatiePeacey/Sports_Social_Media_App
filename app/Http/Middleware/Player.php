<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Player
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if(!Auth::check()){
            return redirect()->route('login');
        }
        
        $userRole=Auth::user()->role;
        
        if($userRole=='manager'){
            return redirect()->route('manager');
        }
        if($userRole=='coach'){
            return redirect()->route('coach');
        }
        if($userRole=='player'){
            return $next($request);
        }
    }
}
