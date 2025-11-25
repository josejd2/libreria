<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autores extends Model
{
    // Esto sirve para poder usar factories
    use HasFactory;
    // Nombre de la tabla asociada
    protected $table = 'autores';
    // Campos asignables masivamente
    protected $fillable = [
        'nombre',
        'apellidos'
    ];
}