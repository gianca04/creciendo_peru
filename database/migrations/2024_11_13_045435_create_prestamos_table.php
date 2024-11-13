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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente_id')->nullable()->index('cliente_id');
            $table->decimal('monto', 10);
            $table->decimal('tasa_interes', 5);
            $table->integer('plazo');
            $table->date('fecha_desembolso')->nullable();
            $table->date('fecha_vencimiento')->nullable();
            $table->enum('estado', ['pendiente', 'cancelado', 'en mora', 'liquidado', 'reestructurado'])->nullable()->default('pendiente');
            $table->enum('tipo_prestamo', ['personal', 'vehiculo', 'hipotecario', 'microempresa']);
            $table->date('fecha_aprobacion')->nullable();
            $table->text('comentarios')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
