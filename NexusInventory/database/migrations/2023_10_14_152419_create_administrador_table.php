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
        Schema::create('administrador', function (Blueprint $table) {
            $table->smallInteger('ID_A');
            $table->string('Nombre', 30);
            $table->string('Contrasena', 100);
            $table->date('fecha');
            $table->integer('ID_N', 9);

            //clave secundaria
            $table->index('ID_N');

            //restriccion de clave externa
            $table->foreign('ID_N')->references('ID_N')->on('empleados');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('administrador', function (Blueprint $table) {
            $table->dropForeign(['ID_N']);
        });

        Schema::dropIfExists('administrador');
    }
};
