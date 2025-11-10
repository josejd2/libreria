<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuariosFactory extends Factory
{
    // Modelo asociado
    protected $model = Usuarios::class;

    public function definition()
    {
        return [
            'usuario' => $this->faker->userName(),       
            'password' => bcrypt('password123'),         
            'perfil' => 'usuario', 
        ];
    }
}