<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Agent
{
    public function handle($request, Closure $next)
    {
        $roles = array('agent', 'admin');
        
        if (Auth::check() &&  in_array(Auth::user()->role, $roles)) {
            return $next($request);
        }
        else {
            return redirect('/');
        }
    }
}
