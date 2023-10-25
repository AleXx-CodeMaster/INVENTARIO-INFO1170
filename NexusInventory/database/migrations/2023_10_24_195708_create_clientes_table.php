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
        Schema::create('clientes', function (Blueprint $table) {
            $table->smallInteger('ID_C')->primary();
            $table->string('Nombre', 50)->nullable();
            $table->string('Correo', 50)->nullable();
            $table->integer('Telefono')->nullable();
            $table->string('Direccion', 50)->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
