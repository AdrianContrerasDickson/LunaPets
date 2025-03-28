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
        Schema::create('juguetes', function (Blueprint $table) {
            $table->id('codigo_juguetes');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('disponibilidad');
            $table->integer('valor');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juguetes');
    }
};
