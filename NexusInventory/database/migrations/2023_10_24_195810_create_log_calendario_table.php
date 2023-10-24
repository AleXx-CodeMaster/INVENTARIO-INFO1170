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
        Schema::create('log_calendario', function (Blueprint $table) {
            $table->integer('ID_F')->nullable();
            $table->date('Fecha')->nullable();
            $table->string('Recordatorio', 50)->nullable();
            $table->date('Fecha_Modificiacion')->nullable();
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('log_calendario');
    }
};
