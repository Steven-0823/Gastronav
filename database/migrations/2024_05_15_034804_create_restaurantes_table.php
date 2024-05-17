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
        Schema::create('restaurantes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('descripcion');
            $table->string('direccion');
            $table->string('imagen', 255);
            $table->unsignedBigInteger('categoria_id'); // Cambiar el nombre del campo a categoria_id
            $table->string('telefono', 20);
            $table->time('horario_apertura');
            $table->time('horario_cierre');
            $table->timestamps();

            // Definir la clave foránea
            $table->foreign('categoria_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurantes');
    }
};
