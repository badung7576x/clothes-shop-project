<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  $guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next)
    {
        if (Auth::guard('admin') && !Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }
        if (Auth::guard('web') && !Auth::guard('web')->check()) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
