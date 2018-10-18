<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Customer
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'customer') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'agent') {
            return redirect('/homer');
        }
        else {
            return redirect('/admin');
        }
    }
}
