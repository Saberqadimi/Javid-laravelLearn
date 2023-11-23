<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();
        if (Auth::check() && $user->type == 'admin' || $user->type == 'staff')
        {
            return $next($request);
        }
        return redirect('/user-panel/index');
    }
}