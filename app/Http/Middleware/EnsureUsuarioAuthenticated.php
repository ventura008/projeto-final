<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EnsureUsuarioAuthenticated
{
    public function handle(Request $request, Closure $next)
    {
        if (! session()->has('usuario_id')) {
            return redirect('/login');
        }

        return $next($request);
    }
}