<?php
namespace Database\Seeders;

use App\Models\Alquilan;
use App\Models\Libros;
use App\Models\Usuarios;
use Illuminate\Database\Seeder;

class AlquilanSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = Usuarios::all();
        $libros = Libros::all();
        $usedPairs = [];
        $count = 0;

        // Crear 6 registros únicos de alquiler
        while ($count < 6) {
            $usuario = $usuarios->random();
            $libro = $libros->random();
            $pair = "{$usuario->id}-{$libro->id}";

            if (!in_array($pair, $usedPairs)) {
                Alquilan::factory()->create([
                    'usuarios_id' => $usuario->id,
                    'libros_id' => $libro->id,
                ]);
                $usedPairs[] = $pair;
                $count++;
            }
        }
    }
}