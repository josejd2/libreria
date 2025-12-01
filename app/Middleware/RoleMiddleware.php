<?php

namespace App\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        // Verificar si el usuario está autenticado
        if (!Auth::check()) {
            // Si no está logueado, redirige a la página de inicio de sesión
            return redirect()->route('login');
        }

        $user = Auth::user();

        // Verificar el pefil del usuario
        if (in_array($user->perfil, $roles)) {
            return $next($request);
        }

        // Si el rol no está permitido, niega el acceso
        abort(403, 'Acceso no autorizado. Tu rol no tiene permiso para ver esta página.');

        return $next($request);
    }
}
