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
        Schema::create('garantias_avales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('prestamo_id')->nullable()->index('prestamo_id');
            $table->enum('tipo_garantia', ['propiedad', 'vehiculo', 'aval']);
            $table->text('descripcion')->nullable();
            $table->decimal('valor', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('garantias_avales');
    }
};
