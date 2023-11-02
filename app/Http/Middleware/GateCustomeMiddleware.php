<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class GateCustomeMiddleware
{

    public function handle(Request $request, Closure $next , $permissionName)
    {
        if (Gate::allows($permissionName)) {
            return $next($request);
        }
        abort(403, 'Unauthorized');
    }
}
