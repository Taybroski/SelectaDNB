<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    // Admin access control authentication
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'admin') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'agent') {
            return redirect('/admin');
        }
        else {
            return redirect('/home');
        }
    }
}
