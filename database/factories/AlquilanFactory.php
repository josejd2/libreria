<?php

namespace Database\Factories;

use App\Models\Alquilan;
use App\Models\Libros;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlquilanFactory extends Factory
{
    protected $model = Alquilan::class;
    public function definition(): array
    {
        return [
            'usuarios_id' => Usuarios::inRandomOrder()->first()->id,
            'libros_id' => Libros::inRandomOrder()->first()->id,
            'fecha_devolucion' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'precio' => $this->faker->numberBetween(1, 100)
        ];
    }
}