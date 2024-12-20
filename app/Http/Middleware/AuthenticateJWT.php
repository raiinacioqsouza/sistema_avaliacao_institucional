<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthenticateJWT
{
    public function handle($request, Closure $next)
    {
        try {
            // Verifica se o token é válido
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            return response()->json(['error' => 'Token inválido ou não fornecido'], 401);
        }

        return $next($request);
    }
}
