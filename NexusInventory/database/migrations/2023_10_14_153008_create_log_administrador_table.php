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
        Schema::create('log_administrador', function (Blueprint $table) {
            $table->integer('ID_A')->nullable();
            $table->integer('ID_N')->nullable();
            $table->string('Nombre', 30)->nullable();
            $table->date('Fecha')->nullable();
            $table->string('contrasena', 6)->nullable();
            $table->date('Fecha_Modificacion')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_administrador');
    }
};
