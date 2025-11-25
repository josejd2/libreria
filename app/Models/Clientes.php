<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clientes extends Model
{
    // Esto sirve para poder usar factories
    use HasFactory;
    // Nombre de la tabla asociada
    protected $table = 'clientes';
    // Campos asignables masivamente
    protected $fillable = [
        'nombre',
        'email',
        'telefono'
    ];
}