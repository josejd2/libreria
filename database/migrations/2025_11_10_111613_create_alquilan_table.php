<?php

use App\Models\Clientes;
use App\Models\Libros;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alquilan', function (Blueprint $table) {
            $table->foreignIdFor(Clientes::class)->constrained();
            $table->foreignIdFor(Libros::class)->constrained();
            $table->date('fecha_devolucion');
            $table->double('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquilan');
    }
};
