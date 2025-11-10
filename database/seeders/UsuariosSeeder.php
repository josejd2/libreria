<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuarios;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        Usuarios::factory()->create([
            'usuario' => 'josejd2',
            'password' => '1234',
            'perfil' => 'admin'
        ]);

        Usuarios::factory(9)->create();
    }
}
