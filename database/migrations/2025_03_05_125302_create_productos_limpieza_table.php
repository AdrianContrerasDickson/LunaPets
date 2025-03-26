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
        Schema::create('productos_limpieza', function (Blueprint $table) {
            $table->id('codigo_del_producto');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('disponibilidad');
            $table->integer('valor');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos_limpieza');
    }
};
