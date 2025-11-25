<?php

namespace Database\Factories;

use App\Models\Libros;
use App\Models\Autores;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibrosFactory extends Factory
{
    protected $model = Libros::class;
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'tematica' => $this->faker->word(),
            'autores_id' => Autores::inRandomOrder()->first()->id
        ];
    }
}