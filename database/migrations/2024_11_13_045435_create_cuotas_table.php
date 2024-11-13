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
        Schema::create('cuotas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prestamo_id')->nullable()->index('prestamo_id');
            $table->decimal('monto', 10);
            $table->date('fecha_vencimiento');
            $table->enum('estado', ['pendiente', 'pagada', 'en mora'])->nullable()->default('pendiente');
            $table->enum('metodo_pago', ['efectivo', 'transferencia', 'cheque', 'otros'])->nullable()->default('efectivo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cuotas');
    }
};
