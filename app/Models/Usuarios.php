<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable; 

class Usuarios extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'usuario',
        'password',
        'perfil'
    ];
    
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
