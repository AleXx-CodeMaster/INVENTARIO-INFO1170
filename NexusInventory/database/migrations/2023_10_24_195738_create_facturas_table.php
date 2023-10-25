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
        Schema::create('factura', function (Blueprint $table) {
            $table->smallInteger('ID_F')->primary();
            $table->string('Factura', 100)->nullable();
            $table->date('Fecha_In');
            $table->integer('Precio_Total');
            $table->integer('Total');
            $table->integer('Deuda');
            $table->integer('ID_E');
            $table->timestamps();


            $table->foreign('ID_E')->references('ID_E')->on('empresas'); // Establece la clave foránea con la tabla empresas

        });

    }

    public function down()
    {
        Schema::dropIfExists('factura');
    }
};
