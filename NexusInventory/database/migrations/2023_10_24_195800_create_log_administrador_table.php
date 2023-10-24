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
            $table->string('Contrasena', 100)->nullable();
            $table->date('Fecha_Modificacion')->nullable();
            $table->increments('id'); // Clave primaria autoincremental
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('log_administrador');
    }
};
