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
        Schema::create('empresas_logistica', function (Blueprint $table) {
            $table->id();
            $table->string('razon_social', 150);
            $table->string('nit', 15);
            $table->string('direccion', 200)->nullable();
            $table->string('telefono', 35);
            $table->string('fax', 25);
            $table->string('email', 255);
            $table->string('pagina_web', 255)->nullable();
            $table->string('logo', 255)->nullable();
            $table->unsignedBigInteger('depto_id');
            $table->foreign('depto_id')->references('id')->on('departamentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas_logisticas');
    }
};
