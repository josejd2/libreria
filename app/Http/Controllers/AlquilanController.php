<?php

namespace App\Http\Controllers;

use App\Models\Alquilan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AlquilanController extends Controller
{
    public function userIndex()
    {
        $userId = Auth::id();

        $alquileres = Alquilan::with('libro.autor')
            ->where('usuarios_id', $userId)
            ->get();
            
        return view('pages.usuario.dashboard', [
            'alquileres' => $alquileres,
            'usuario' => Auth::user(),
        ]);
    }
}