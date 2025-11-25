<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    // Esto sirve para poder usar factories
    use HasFactory;
    // Nombre de la tabla asociada
    protected $table = 'libros';
    // Campos asignables masivamente
    protected $fillable = [
        'titulo',
        'tematica',
        'autores_id'
    ];
}