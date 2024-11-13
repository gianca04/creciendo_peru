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
        Schema::table('ubicaciones', function (Blueprint $table) {
            $table->foreign(['cliente_id'], 'ubicaciones_ibfk_1')->references(['id'])->on('clientes')->onUpdate('restrict')->onDelete('cascade');
            $table->foreign(['id_distrito'], 'ubicaciones_ibfk_2')->references(['id'])->on('distritos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ubicaciones', function (Blueprint $table) {
            $table->dropForeign('ubicaciones_ibfk_1');
            $table->dropForeign('ubicaciones_ibfk_2');
        });
    }
};
