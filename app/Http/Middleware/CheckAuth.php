<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuth
{
    /**
     * Maneja una solicitud entrante.
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica si el usuario está autenticado.
        if (!Auth::check()) {
            return response()->json(['error' => 'No autenticado.'], 401);
        }

        return $next($request);
    }
}
