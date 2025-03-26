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
        Schema::create('catalogoproductos', function (Blueprint $table) {
            $table->string('accesorios');
            $table->string('alimentos');
            $table->string('medicamentos');
            $table->string('juguetes');
            $table->string('productos_limpieza');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogoproductos');
    }
};
