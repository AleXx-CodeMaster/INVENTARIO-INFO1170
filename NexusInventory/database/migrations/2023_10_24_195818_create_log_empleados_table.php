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
        Schema::create('log_empleados', function (Blueprint $table) {
            $table->integer('ID_N')->nullable();
            $table->string('Oficio', 30)->nullable();
            $table->string('Contrasena', 100)->nullable();
            $table->date('Fecha_Modificacion')->nullable();
            $table->date('Fecha_Nacimiento')->nullable();
            $table->integer('Salario')->nullable();
            $table->string('Correo', 100)->nullable();
            $table->integer('ID_E')->nullable();
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('log_empleados');
    }
};
