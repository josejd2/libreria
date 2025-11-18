<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// =========================================================================
// Estás es la ruta para usuarios NO autenticados
// =========================================================================
Route::middleware('guest')->group(function () {
    
    // Muestra el formulario de inicio de sesión
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    
    // Procesa el inicio de sesión
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

// =========================================================================
// Estás son las rutas protegidas (solo accesibles para usuarios autenticados)
// =========================================================================
Route::middleware('auth')->group(function () {
    
    // RUTA PRINCIPAL ('/'): Es la página de bienvenida para usuarios logueados.
    Route::get('/', function () {
        return '
        <h1>¡Has iniciado sesión!</h1>
        <form method="POST" action="'.route('logout').'">
            '.csrf_field().' 
            <button type="submit" style="padding: 10px; border: none; cursor: pointer; border-radius: 5px; font-weight: bold;">
                Cerrar Sesión
            </button>
        </form>
        ';
    })->name('home'); 

    // RUTA para cerrar sesión
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});