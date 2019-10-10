<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSalaCodigoToMaquinarias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('maquinarias', function (Blueprint $table) {
            $table->integer('sala_codigo')->after('centrodesalud_codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('maquinarias', function (Blueprint $table) {
            $table->dropColumn('sala_codigo');
        });
    }
}
