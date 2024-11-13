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
        Schema::create('historial_cobros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cobrador_id')->nullable()->index('cobrador_id');
            $table->unsignedBigInteger('cliente_id')->nullable()->index('cliente_id');
            $table->date('fecha_visita')->nullable();
            $table->decimal('monto', 10)->nullable();
            $table->enum('estado', ['pagado', 'pendiente', 'incumplido'])->nullable()->default('pendiente');
            $table->text('comentarios')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historial_cobros');
    }
};
