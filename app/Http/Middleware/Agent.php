<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Agent
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role == 'agent') {
            return $next($request);
        }
        elseif (Auth::check() && Auth::user()->role == 'customer') {
            return redirect('/home');
        }
        else {
            return redirect('/admin');
        }
    }
}
