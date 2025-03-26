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
        Schema::create('peluqueria', function (Blueprint $table) {
            $table->bigIncrements('codigo_cliente');
            $table->unsignedBigInteger('codigo_mascota');
            $table->string('tipo_mascota');
            $table->text('descripcion');
            $table->datetime('fecha');

            $table->foreign('codigo_mascota')->references('codigo_cliente')
              ->on('peluqueria');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peluqueria');
    }
};
