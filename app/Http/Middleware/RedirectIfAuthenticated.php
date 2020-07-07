<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;

use Sentinel;
use Redirect;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        if (Sentinel::check()) {
            return Redirect::route('dashboard');
        }
        return $next($request);
    }
}
