<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Usuarios::factory()->create([
            'name' => 'josejd2',
            'password' => '1234',
            'perfil' => '1'
        ]);

        Usuarios::factory(9)->create();
    }
}