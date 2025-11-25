<?php

namespace Database\Factories;

use App\Models\Autores;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutoresFactory extends Factory
{
    protected $model = Autores::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'apellidos' => $this->faker->lastName()
        ];
    }
}