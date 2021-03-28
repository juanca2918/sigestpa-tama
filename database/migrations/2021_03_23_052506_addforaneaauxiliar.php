<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Addforaneaauxiliar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->foreignId('id_auxiliar')->references('idauxiliar')->on('auxiliars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('citas', function (Blueprint $table) {
            $table->dropForeign('id_auxiliar');
        });
    }
}
