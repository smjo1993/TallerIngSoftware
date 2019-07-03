<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTrabajoTitulacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_trabajo_titulacion', function (Blueprint $table) {
            $table->integer('estudiante_id')->unsigned();
            $table->integer('trabajo_titulacion_id')->unsigned();
            $table->timestamps();

            $table->foreign('estudiante_id')->references('id')->on('estudiantes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('trabajo_titulacion_id')->references('id')->on('trabajo_titulacions')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante_trabajo_titulacion');
    }
}
