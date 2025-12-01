<?php

namespace Database\Seeders;

use App\Models\Autores;
use Illuminate\Database\Seeder;

class AutoresSeeder extends Seeder
{
    public function run(): void
    {
        Autores::factory()->create([
            'nombre' => 'Miguel',
            'apellidos' => 'de Cervantes'
        ]);    
        Autores::factory()->create([
            'nombre' => 'Isaac',
            'apellidos' => 'Asimov'
        ]);    
        Autores::factory()->create([
            'nombre' => 'Gabriel',
            'apellidos' => 'Marquez'
        ]);    
        Autores::factory()->create([
            'nombre' => 'Antonie',
            'apellidos' => 'de Saint-Exupery'
        ]);    
    }
}