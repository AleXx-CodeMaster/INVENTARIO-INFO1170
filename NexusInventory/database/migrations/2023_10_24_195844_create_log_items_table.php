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
            $table->string('Tipo_Producto', 100)->nullable();
            $table->date('Fecha_Modificacion')->nullable();
            $table->integer('Categoria')->nullable();
            $table->string('Prod_Foto', 100)->nullable();
            $table->string('Proveedor', 100)->nullable();
            $table->integer('Ex_Incial')->nullable();
            $table->integer('Ex_Actual')->nullable();
            $table->integer('Precio_C')->nullable();
            $table->integer('Precio_V')->nullable();
            $table->date('Fecha_Entry')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('log_items');
    }
};
