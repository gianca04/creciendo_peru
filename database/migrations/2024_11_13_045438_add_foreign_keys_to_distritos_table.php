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
        Schema::table('distritos', function (Blueprint $table) {
            $table->foreign(['province_id'], 'distritos_ibfk_1')->references(['id'])->on('provincias')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['department_id'], 'distritos_ibfk_2')->references(['id'])->on('departamentos')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('distritos', function (Blueprint $table) {
            $table->dropForeign('distritos_ibfk_1');
            $table->dropForeign('distritos_ibfk_2');
        });
    }
};
