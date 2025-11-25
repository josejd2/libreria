<?php

namespace Database\Seeders;

use App\Models\Alquilan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlquilanSeeder extends Seeder
{
    public function run(): void
    {
        Alquilan::factory()->count(10)->create();
    }
}