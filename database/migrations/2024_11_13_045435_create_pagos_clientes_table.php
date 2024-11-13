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
        Schema::create('pagos_clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente_id')->nullable()->index('cliente_id');
            $table->decimal('monto', 10)->nullable();
            $table->enum('estado', ['completo', 'pendiente', 'parcialmente'])->nullable()->default('pendiente');
            $table->date('fecha_pago')->nullable();
            $table->enum('metodo_pago', ['efectivo', 'transferencia', 'cheque', 'otros'])->nullable()->default('efectivo');
            $table->text('comentarios')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos_clientes');
    }
};
