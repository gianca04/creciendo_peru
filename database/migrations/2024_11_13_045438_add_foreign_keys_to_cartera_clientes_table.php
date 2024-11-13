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
        Schema::table('cartera_clientes', function (Blueprint $table) {
            $table->foreign(['cobrador_id'], 'cartera_clientes_ibfk_1')->references(['id'])->on('users')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['cliente_id'], 'cartera_clientes_ibfk_2')->references(['id'])->on('clientes')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cartera_clientes', function (Blueprint $table) {
            $table->dropForeign('cartera_clientes_ibfk_1');
            $table->dropForeign('cartera_clientes_ibfk_2');
        });
    }
};
