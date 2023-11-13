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
        Schema::create('registro_administradors', function (Blueprint $table) {
            $table->increments('ID_Registro_Administrador');
            $table->string('Nombre_Usuario')->nullable();
            $table->binary('Img_Usuario')->nullable();
            $table->string('Tipo')->nullable();
            $table->integer('rut_usuario')->nullable();
            $table->integer('Contrasena_Usuario')->nullable();
            $table->string('Correo')->nullable();
            $table->integer('Telefono')->nullable();
            $table->date('Fecha_ingreso_al_Sistema')->nullable();
            $table->integer('En_linea')->nullable();
            $table->integer('Habilitado_el_Colaborativo')->nullable();


            $table->unsignedInteger('ID_Registro_Servidor')->nullable();
            $table->foreign('ID_Registro_Servidor')->references('ID_Registro_Servidor')->on('registro_servidors');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_administradors');
    }
};
