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
        Schema::create('tabla_datos_almacenamientos', function (Blueprint $table) {
            $table->increments('ID_Almacenamiento');
            $table->unsignedInteger('ID_Registro_Servidor')->nullable();
            $table->unsignedInteger('ID_Categorias')->nullable();
            $table->string('Nombre_Bodeguera')->nullable();
            $table->integer('Capacidad_Maxima')->nullable();
            $table->integer('Capacidad_Actual')->nullable();

            $table->foreign('ID_Registro_Servidor')->references('ID_Registro_Servidor')->on('registro_servidors');
            $table->foreign('ID_Categorias')->references('ID_Categorias')->on('tabla_datos_categorias');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabla_datos_almacenamientos');
    }
};
