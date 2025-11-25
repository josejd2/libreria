<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuariosFactory extends Factory
{
    // Modelo asociado
    protected $model = Usuarios::class;
    // Definición de los valores por defecto
    public function definition()
    {
        return [
            'usuario' => $this->faker->userName(),       
            'password' => bcrypt('P@ssw0rd'),         
            'perfil' => 'usuario'
        ];
    }
}