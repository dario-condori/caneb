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
        Schema::create('boletin_contenido', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('boletin_id');
            $table->foreign('boletin_id')->references('id')->on('boletines');
            $table->integer('capa')->default(1);
            $table->integer('seccion')->default(1);
            $table->integer('columna')->default(1);
            $table->integer('ancho')->default(6);
            $table->unsignedBigInteger('elemento_id');
            $table->foreign('elemento_id')->references('id')->on('elemento_boletin');
            $table->unsignedBigInteger('config_graficos_id');
            $table->foreign('config_graficos_id')->references('id')->on('config_graficos');
            $table->integer('cantidad_item')->default();
            $table->integer('gestion_ini')->default(0);
            $table->integer('gestion_fin')->default(0);
            $table->integer('ames')->default(0);
            $table->json('filtros')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boletin_contenido');
    }
};
