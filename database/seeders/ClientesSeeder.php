<?php

namespace Database\Seeders;

use App\Models\Clientes;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run(): void
    {
        Clientes::factory()->create([
            'nombre' => 'Jose',
            'apellidos' => 'Lopez Villena',
            'telefono' => '123456789',
            'usuarios_id' => 1
        ]);
        Clientes::factory()->create([
            'nombre' => 'Pepe',
            'apellidos' => 'Pepe',
            'telefono' => '987654321',
            'usuarios_id' => 2
        ]);
    }
}
