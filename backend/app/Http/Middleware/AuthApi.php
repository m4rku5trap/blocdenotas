<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthApi
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->header('Authentication') !== 'Doonamis') {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}

