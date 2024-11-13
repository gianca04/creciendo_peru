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
        Schema::create('observaciones_reputacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('reputacion_crediticia_id')->nullable()->index('reputacion_crediticia_id');
            $table->enum('tipo_observacion', ['mora', 'acuerdo fallido', 'pago adelantado']);
            $table->text('descripcion')->nullable();
            $table->date('fecha_observacion')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('observaciones_reputacion');
    }
};
