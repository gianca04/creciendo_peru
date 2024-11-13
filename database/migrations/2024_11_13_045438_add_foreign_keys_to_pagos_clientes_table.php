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
        Schema::table('pagos_clientes', function (Blueprint $table) {
            $table->foreign(['cliente_id'], 'pagos_clientes_ibfk_1')->references(['id'])->on('clientes')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pagos_clientes', function (Blueprint $table) {
            $table->dropForeign('pagos_clientes_ibfk_1');
        });
    }
};
