<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->roles->contains('name', 'admin')) {
            return $next($request);
        }

        return redirect('/'); // Redirect to the root URL if the user doesn't have the required role.
    }
}
