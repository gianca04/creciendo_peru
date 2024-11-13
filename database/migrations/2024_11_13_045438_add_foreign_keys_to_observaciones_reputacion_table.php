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
        Schema::table('observaciones_reputacion', function (Blueprint $table) {
            $table->foreign(['reputacion_crediticia_id'], 'observaciones_reputacion_ibfk_1')->references(['id'])->on('reputacion_crediticia')->onUpdate('restrict')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('observaciones_reputacion', function (Blueprint $table) {
            $table->dropForeign('observaciones_reputacion_ibfk_1');
        });
    }
};
