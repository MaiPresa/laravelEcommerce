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
        Schema::create('pedido_plato', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_plato');

            // FK
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos');
            $table->foreign('id_plato')->references('id_plato')->on('platos');

            // PK
            $table->primary(['id_pedido', 'id_plato']);
            $table->integer('cantidad_platos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_plato');
    }
};
