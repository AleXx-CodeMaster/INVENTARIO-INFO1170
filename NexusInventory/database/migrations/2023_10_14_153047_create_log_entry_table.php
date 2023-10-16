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
        Schema::create('log_entry', function (Blueprint $table) {
            $table->smallInteger('ID');
            $table->integer('ID_N')->nullable();
            $table->string('Nombre', 30)->nullable();
            $table->date('Fecha_Ingreso')->nullable();

            // Agrega la clave primaria
            $table->primary('ID');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_entry');
    }
};
