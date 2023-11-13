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
        Schema::create('tabla_datos_productos', function (Blueprint $table) {
            $table->increments('ID_Product');
            $table->unsignedInteger('ID_Registro_Servidor')->nullable();
            $table->string('Nombre_Producto')->nullable();
            $table->integer('Codigo_Barra')->nullable();
            $table->integer('Numero_de_Unidades')->nullable();
            $table->binary('Imagen_Producto')->nullable();
            $table->integer('Precio_Comprado_por_Unidad')->nullable();
            $table->integer('Precio_Venta_por_Unidad')->nullable();
            $table->date('Fecha_de_Caducacion')->nullable();
            $table->date('Fecha_Ingreso_al_Sistema')->nullable();
            $table->string('Informacion_Producto')->nullable();
            $table->unsignedInteger('ID_Categorias')->nullable();

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
        Schema::dropIfExists('tabla_datos_productos');
    }
};
