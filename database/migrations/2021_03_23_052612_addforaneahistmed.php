<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addforaneahistmed extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('historia_medica_citas', function (Blueprint $table) {
            $table->foreignId('id_histmed')->references('idhistmed')->on('historia_medicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('historia_medica_citas', function (Blueprint $table) {
            $table->dropForeign('id_histmed');
        });
    }
}
