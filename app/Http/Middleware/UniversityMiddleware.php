<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class UniversityMiddleware
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
        if(Auth::check() && Auth::user()->role->id == 2 && Auth::user()->status != 0)
        {
            return $next($request);
        } else {
            Auth::logout();
            return redirect('/login')->with('failure', 'Please Verify your account first.');
        }
    }
}
