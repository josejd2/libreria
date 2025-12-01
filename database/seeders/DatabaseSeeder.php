<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Limpiar tablas antes de sembrar
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('alquilan')->truncate();
        DB::table('libros')->truncate();
        DB::table('autores')->truncate();
        DB::table('usuarios')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        // Llamar a otros seeders
        $this->call([
            UsuariosSeeder::class,
            AutoresSeeder::class,
            LibrosSeeder::class,
            AlquilanSeeder::class
        ]);
    }
}