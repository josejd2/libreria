<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Muestra la vista del formulario de inicio de sesión.
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validación
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);

        // Búsqueda del usuario
        $usuario = Usuarios::where('usuario', $request->usuario)->first();

        // Verifica credenciales: El usuario debe existir Y la contraseña debe coincidir con el hash.
        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            
            // !FALLO: Vuelve atrás y notifica el error.
            return back()
                ->withInput($request->only('usuario'))
                ->with('status', 'Credenciales incorrectas. Intenta de nuevo.');
        }

        // *EXITO: Inicia la sesión de Laravel.
        Auth::login($usuario);

        // Regenera la sesión para evitar ataques de fijación de sesión (Seguridad).
        $request->session()->regenerate();

        // Redirige al dashboard según el perfil
        return match ($usuario->perfil) {
            'admin' => redirect()->intended(route('admin.dashboard')),
            'gerente' => redirect()->intended(route('gerente.dashboard')),
            'usuario' => redirect()->intended(route('user.dashboard')),
            default => redirect()->intended(route('login'))
        };
    }

    public function logout(Request $request)
    {
        // Cierra la sesión.
        Auth::logout();
        
        // Invalida y regenera el token de sesión (Seguridad).
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirige a la página principal o de login.
        return redirect('/');
    }
}