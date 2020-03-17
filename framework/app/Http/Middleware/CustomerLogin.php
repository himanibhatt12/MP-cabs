<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class CustomerLogin
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
        if (Auth::user()->user_type != "C") {
            return redirect("user-login");
        }
        return $next($request);
    }
}
