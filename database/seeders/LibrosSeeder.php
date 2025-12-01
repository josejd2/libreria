<?php

namespace Database\Seeders;

use App\Models\Libros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    public function run(): void
    {
        Libros::factory()->create([
            'titulo' => 'Don Quijote de la Mancha',
            'tematica' => 'Clasico',
            'autores_id' => 1
        ]);
        Libros::factory()->create([
            'titulo' => 'El principito',
            'tematica' => 'Fantasia',
            'autores_id' => 4
        ]);
        Libros::factory()->create([
            'titulo' => 'Cien años de soledad',
            'tematica' => 'Realismo magico',
            'autores_id' => 3
        ]);
        Libros::factory()->create([
            'titulo' => 'El coronel no tiene quien le escriba',
            'tematica' => 'Realismo magico',
            'autores_id' => 3
        ]);
        Libros::factory()->create([
            'titulo' => 'Yo, robot',
            'tematica' => 'Ciencia ficcion',
            'autores_id' => 2
        ]);
    }
}