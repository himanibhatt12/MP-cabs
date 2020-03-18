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
        if (Auth::user() && Auth::user()->user_type == "C") {
            return $next($request);
        }
        return redirect("user-login")->withErrors(["error" => "You must have to login to book a cab"]);
    }
}
