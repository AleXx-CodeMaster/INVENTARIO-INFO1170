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
        Schema::create('log_empresas', function (Blueprint $table) {
            $table->integer('ID_E')->nullable();
            $table->string('Nombre', 30)->nullable();
            $table->date('Fecha_Creacion')->nullable();
            $table->string('Tipo_Negocio', 100)->nullable();
            $table->integer('Cant_Empleados')->nullable();
            $table->date('Fecha_Modificacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_empresas');
    }
};
