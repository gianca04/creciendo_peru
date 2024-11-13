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
        Schema::table('documentos_prestamos', function (Blueprint $table) {
            $table->foreign(['prestamo_id'], 'documentos_prestamos_ibfk_1')->references(['id'])->on('prestamos')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documentos_prestamos', function (Blueprint $table) {
            $table->dropForeign('documentos_prestamos_ibfk_1');
        });
    }
};
