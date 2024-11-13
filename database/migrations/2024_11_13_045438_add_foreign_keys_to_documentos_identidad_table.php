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
        Schema::table('documentos_identidad', function (Blueprint $table) {
            $table->foreign(['cliente_id'], 'documentos_identidad_ibfk_1')->references(['id'])->on('clientes')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documentos_identidad', function (Blueprint $table) {
            $table->dropForeign('documentos_identidad_ibfk_1');
        });
    }
};
