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
        'usuarios_id',
        'libros_id',
        'fecha_devolucion',
        'precio'
    ];

    /**
     * Relación con el modelo Usuarios
     */
    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuarios_id');
    }

    /**
     * Relación con el modelo Libros
     */
    public function libro()
    {
        return $this->belongsTo(Libros::class, 'libros_id');
    }
}