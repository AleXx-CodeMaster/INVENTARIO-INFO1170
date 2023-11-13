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
        Schema::create('registro_servidors', function (Blueprint $table) {
            $table->increments('ID_Registro_Servidor');
            $table->string('Nombre_Servidor')->nullable();
            $table->binary('Imagen_Servidor')->nullable();
            $table->integer('Contrasena_Servidor')->nullable();
            $table->text('Comentario_Uso_Plataforma')->nullable();
            $table->date('Fecha_ingreso_al_Sistema')->nullable();



            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_servidors');
    }
};
