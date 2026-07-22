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
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('region');
            $table->string('categoria');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('imagen')->nullable();
            $table->text('descripcion')->nullable();
            $table->decimal('calificacion', 2, 1)->default(5.0);
            $table->boolean('envios_nacionales')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiendas');
    }
};
