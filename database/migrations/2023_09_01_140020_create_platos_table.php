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
        Schema::create('platos', function (Blueprint $table) {
            $table->id('id_plato');
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->string('nombre_plato', 255);
            $table->string('descripcion', 1000);
            $table->float('precio');
            $table->string('imagen', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platos');
    }
};
