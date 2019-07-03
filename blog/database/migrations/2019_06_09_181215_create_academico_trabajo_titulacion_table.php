<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicoTrabajoTitulacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academico_trabajo_titulacion', function (Blueprint $table) {
            $table->integer('academico_id')->unsigned();
            $table->integer('trabajo_titulacion_id')->unsigned();
            $table->timestamps();

            $table->foreign('academico_id')->references('id')->on('academicos')
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
        Schema::dropIfExists('academico_trabajo');
    }
}
