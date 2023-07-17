<?php

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
        Schema::create('config_graficos', function (Blueprint $table) {
            $table->id();
            $table->string('flujo', 10)->default('export');
            $table->integer('activo')->default(1);
            $table->string('descripcion', 50)->default('-');
            $table->string('vista', 75)->default('-');
            $table->string('funcion', 75)->default('-');
            $table->json('filtros')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_graficos');
    }
};
