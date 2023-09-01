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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigInteger('id_usuarios');
            $table->unsignedBigInteger('id_roles', 255);
            $table->string('nombre_usuarios', 255);
            $table->string('contrasena', 255);
            $table->string('email', 255);
            $table->string('telefono', 255);
            $table->string('direccion', 255);
            $table->string('ciudad', 255);
            $table->dateTime('fecha_registro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
