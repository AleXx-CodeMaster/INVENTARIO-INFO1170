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
        Schema::create('log_items', function (Blueprint $table) {
            $table->integer('ID_I')->nullable();
            $table->string('Nombre', 30)->nullable();
            $table->integer('Cantidad')->nullable();
            $table->string('Tipo_Producto', 100)->nullable();
            $table->date('Fecha_Modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_items');
    }
};
