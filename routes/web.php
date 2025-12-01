<?php

use App\Http\Controllers\AlquilanController;
use App\Http\Controllers\AuthController;
use App\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Route;

// Muestra el formulario de login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rutas protegidas para usuarios con el perfil 'usuario'
Route::middleware(['auth', RoleMiddleware::class . ':usuario'])->group(function () {
    Route::get('/', [AlquilanController::class, 'userIndex'])->name('user.dashboard');
});
