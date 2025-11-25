<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class Usuarios extends Authenticatable
{
    // Esto sirve para poder usar factories
    use HasFactory;
    // Nombre de la tabla asociada
    protected $table = 'usuarios';
    // Campos asignables masivamente
    protected $fillable = [
        'usuario',
        'password',
        'perfil'
    ];
    // Ocultar la contraseña al convertir el modelo a un array o JSON
    protected $hidden = [
        'password'
    ];
    // Aquí se cifra la contraseña automáticamente al crear un nuevo usuario
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($usuario) {
            $usuario->password = bcrypt($usuario->password);
        });
    }
}