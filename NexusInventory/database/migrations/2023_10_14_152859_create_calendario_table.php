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
        Schema::create('calendario', function (Blueprint $table) {
            $table->smallInteger('ID_F');
            $table->date('Fecha')->nullable();
            $table->string('Recordatorio' , 50)->nullable();

            //agregar la clave primaria
            $table->primary('ID_F');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendario');
    }
};
