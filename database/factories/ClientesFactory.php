<?php

namespace Database\Factories;

use App\Models\Clientes;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientesFactory extends Factory
{
    protected $model = Clientes::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName(),
            'apellidos' => $this->faker->lastName(),
            'telefono' => $this->faker->phoneNumber(),
            'usuarios_id' => Usuarios::inRandomOrder()->first()->id
        ];
    }
}