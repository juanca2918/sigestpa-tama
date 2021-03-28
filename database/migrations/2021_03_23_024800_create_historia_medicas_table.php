<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriaMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historia_medicas', function (Blueprint $table) {
            $table->id('idhistmed');
            $table->foreignId('id_paciente')->references('idpaciente')->on('pacientes');
            $table->date('fecha');
            $table->text('antecedentes');
            $table->text('alergias');
            $table->text('infquirurgica');
            $table->string('ocupacion');
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
        Schema::dropIfExists('historia_medicas');
    }
}
