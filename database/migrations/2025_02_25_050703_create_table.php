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
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments("Idcliente");
            $table->string("Nombre");
            $table->string("Apellido");
            $table->integer("Telefono");
            $table->string("Direccion");
            $table->string("Correo")->unique();
            $table->timestamp('Verificacion_Correo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table');
    }
};
