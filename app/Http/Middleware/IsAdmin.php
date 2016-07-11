<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class IsAdmin
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
        if (Auth::user()->is_admin) 
        {
            echo "jest admin";
            return $next($request);
        }
        else
        {
            echo "nie jest to admin";
            return redirect()->back();
        }
    }
}
