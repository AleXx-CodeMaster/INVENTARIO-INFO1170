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
        Schema::create('empresas', function (Blueprint $table) {
            $table->integer('ID_E')->primary();
            $table->string('Nombre', 30);
            $table->date('Fecha_Creacion')->nullable();
            $table->string('Tipo_Negocio', 100)->nullable();
            $table->integer('Cant_empleados')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
