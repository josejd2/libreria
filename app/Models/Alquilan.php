<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquilan extends Model
{
    // Esto sirve para poder usar factories
    use HasFactory;
    // Nombre de la tabla asociada
    protected $table = 'alquilan';
    // Campos asignables masivamente
    protected $fillable = [
        'clientes_id',
        'libros_id',
        'fecha_devolucion',
        'precio'
    ];
}