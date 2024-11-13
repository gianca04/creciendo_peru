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
        Schema::table('garantias_avales', function (Blueprint $table) {
            $table->foreign(['prestamo_id'], 'garantias_avales_ibfk_1')->references(['id'])->on('prestamos')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('garantias_avales', function (Blueprint $table) {
            $table->dropForeign('garantias_avales_ibfk_1');
        });
    }
};
