<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $user = Auth::user();

        // Adjust this depending on your column name
        if ($user->role !== $role) {
            abort(403, 'Unauthorized.');
        }

        return $next($request);
    }
}

