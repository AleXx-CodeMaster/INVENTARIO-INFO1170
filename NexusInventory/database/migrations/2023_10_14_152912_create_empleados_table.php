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
            $table->string('contrasena' , 100);
            $table->date('Fecha_Nacimiento')->nullable();
            $table->integer('Salario');
            $table->json('Historial_Salario')->nullable()->check('json_valid(Historial_Salario)');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
