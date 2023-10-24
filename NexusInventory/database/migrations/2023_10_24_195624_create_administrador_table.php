<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('administrador', function (Blueprint $table) {
            $table->smallInteger('ID_A');
            $table->string('Nombre', 30);
            $table->string('Contrasena', 100);
            $table->date('Fecha');
            $table->integer('ID_N');
            $table->timestamps();
        });

        Schema::table('administrador', function (Blueprint $table) {
            $table->primary('ID_A');
            $table->index('ID_N');
            $table->foreign('ID_N')->references('ID_N')->on('empleados');
        });
    }

    public function down()
    {
        Schema::dropIfExists('administrador');
    }
};
