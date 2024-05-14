<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        // Si la solicitud es una API (espera una respuesta JSON), no se realizará ninguna redirección
        if ($request->expectsJson()) {
            return null;
        }
        
        // Si la solicitud no es una API, se redirige a la ruta de inicio de sesión de la API
        return route('api.login'); // Asegúrate de que 'api.login' sea la ruta correcta para el inicio de sesión en tu API
    }
}
