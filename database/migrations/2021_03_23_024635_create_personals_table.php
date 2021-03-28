<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->id("idpersonal");
            $table->foreignId('id_tipodocumento')->references('idtipodoc')->on('tipo_documentos');
            $table->foreignId('id_user')->references('id')->on('users');
            $table->string('numdoc')->unique();
            $table->integer('tel');
            $table->date('fechanac');
            $table->string('genero');
            $table->string('estcivil');
            $table->string('segsocial');
            $table->string('dir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
