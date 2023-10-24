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
            $table->smallInteger('ID_F')->primary();
            $table->date('Fecha')->nullable();
            $table->string('Recordatorio', 50)->nullable();
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('calendario');
    }
};
