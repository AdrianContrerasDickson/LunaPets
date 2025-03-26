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
        Schema::create('mascota', function (Blueprint $table) {
            $table->bigIncrements('codigo_mascota');
            $table->unsignedBigInteger('codigo_cliente');
            $table->string('nombre');
            $table->string('raza');
            $table->string('genero');
            $table->integer('edad');
            $table->string('tipo_mascota');
            $table->datetime('fecha_nacimiento');

            $table->foreign('codigo_cliente')->references('codigo_mascota')
              ->on('mascota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascota');
    }
};
