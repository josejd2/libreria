<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);

        $usuario = Usuarios::where('usuario', $request->usuario)->first();

        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return response()->json(['message' => 'Credenciales incorrectas'], 401);
        }

        // Aquí podrías generar un token (para API) o iniciar sesión con sesión de Laravel
        // Por simplicidad, devolvemos un mensaje
        return response()->json(['message' => 'Login exitoso']);
    }
}
