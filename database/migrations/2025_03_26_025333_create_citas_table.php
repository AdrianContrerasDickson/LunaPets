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
        Schema::create('citas', function (Blueprint $table) {
            $table->id();
            $table->string('servicio');
            $table->date('fecha');
            $table->time('hora');
            $table->string('cliente_nombre');
            $table->string('cliente_correo');
            $table->string('cliente_telefono');
            $table->string('cliente_direccion')->nullable();
            $table->string('mascota_nombre');
            $table->string('mascota_tipo');
            $table->string('mascota_raza')->nullable();
            $table->integer('mascota_edad')->nullable();
            $table->decimal('mascota_peso', 5, 2)->nullable();
            $table->text('notas')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
