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
        Schema::create('log_calendarios', function (Blueprint $table) {
            $table->smallInteger('ID_F')->nullable();
            $table->date('Fecha')->nullable();
            $table->string('Recordatorio', 50)->nullable();
            $table->date('Fecha_Modificiacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_calendarios');
    }
};
