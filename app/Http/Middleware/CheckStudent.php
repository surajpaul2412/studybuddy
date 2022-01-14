<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckStudent
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
        $reqTypeHeader = ($request->hasHeader('Accept')) ? $request->header('Accept') : null;
        $json = ($reqTypeHeader && $reqTypeHeader == 'application/json')?true:false;
        if (Auth::check() && Auth::user()->role_id == 4) {
            return $next($request);
        }
        if ($json) {
            return response()->json($response = [
                'success' => false,
                'message' => 'Unauthorized.',
            ], 401);
        }
        return redirect('/');
    }
}
