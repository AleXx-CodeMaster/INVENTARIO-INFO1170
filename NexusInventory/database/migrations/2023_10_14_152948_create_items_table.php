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
        Schema::create('items', function (Blueprint $table) {
            $table->integer('ID_I');
            $table->string('Nombre', 30);
            $table->integer('Cantidad');
            $table->string('Tipo_Producto' , 100);

            //agrega la clave primaria
            $table->primary('ID_I');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
