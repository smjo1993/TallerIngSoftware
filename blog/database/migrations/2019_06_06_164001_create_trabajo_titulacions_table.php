<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrabajoTitulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabajo_titulacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 128);
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->date('fecha_examen_titulo')->nullable();
            $table->enum('estado' , ['ACEPTADA' , 'INGRESADA', 'FINALIZADA','ANULADA'])->default('INGRESADA');
            $table->integer('id_actividad')->unsigned();
            $table->integer('id_organizacion')->unsigned()->nullable();
            $table->integer('id_academico')->unsigned();
            $table->double('nota')->unsigned()->nullable();
            $table->integer('semestre')->unsigned()->nullable();
            $table->integer('numero')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('id_actividad')->references('id')->on('actividad_titulacions')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_organizacion')->references('id')->on('organizacion_externas')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('id_academico')->references('id')->on('academicos')
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
        Schema::dropIfExists('trabajo_titulacions');
    }
}
