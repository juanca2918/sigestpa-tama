<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id('idpaciente');
            $table->foreignId('id_tipodoc')->references('idtipodoc')->on('tipo_documentos');
            $table->string('numdoc')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fechanac');
            $table->string('genero');
            $table->string('estcivil');
            $table->string('segsocial');
            $table->string('tel');
            $table->string('dir');
            $table->string('email')->unique();
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
        Schema::dropIfExists('pacientes');
    }
}
