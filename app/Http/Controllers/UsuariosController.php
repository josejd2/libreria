<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UsuariosController extends Controller
{
    // Mostrar todos los usuarios
    public function index()
    {
        $usuarios = Usuarios::all();
        return response()->json($usuarios);
    }

    // Mostrar un usuario específico
    public function show($id)
    {
        $usuario = Usuarios::findOrFail($id);
        return response()->json($usuario);
    }

    // Crear un nuevo usuario
    public function store(Request $request)
    {
        $data = $request->validate([
            'usuario' => 'required|string|unique:usuarios,usuario',
            'password' => 'required|string|min:6',
            'perfil' => 'required|string',
        ]);

        $usuario = Usuarios::create($data);

        return response()->json($usuario, 201);
    }

    // Actualizar un usuario existente
    public function update(Request $request, $id)
    {
        $usuario = Usuarios::findOrFail($id);

        $data = $request->validate([
            'usuario' => 'sometimes|string|unique:usuarios,usuario,' . $id,
            'password' => 'sometimes|string|min:6',
            'perfil' => 'sometimes|string',
        ]);

        $usuario->update($data);

        return response()->json($usuario);
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();

        return response()->json(['message' => 'Usuario eliminado']);
    }
}
