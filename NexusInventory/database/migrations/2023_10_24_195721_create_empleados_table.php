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
        Schema::create('empleados', function (Blueprint $table) {
            $table->integer('ID_N')->primary();
            $table->string('Oficio', 30);
            $table->string('Contrasena', 100);
            $table->date('Fecha_Nacimiento');
            $table->integer('Salario');
            $table->string('Correo', 100)->nullable();
            $table->integer('ID_E');
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
