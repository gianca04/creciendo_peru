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
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('telefono', 20);
            $table->text('direccion')->nullable();
            $table->string('documento_identidad', 50)->unique('documento_identidad');
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->enum('estado', ['activo', 'inactivo', 'suspendido'])->nullable()->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
