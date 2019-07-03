<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rut', 128);
            //$table->string('slug', 128);
            $table->string('nombre', 128);
            $table->string('apellido_paterno', 128);
            $table->string('apellido_materno', 128);
            $table->integer('fono')->unsigned();
            $table->string('email', 128)->nullable();
            $table->integer('carrera_id')->unsigned();
            $table->timestamps();

            $table->foreign('carrera_id')->references('id')->on('carreras')
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
        Schema::dropIfExists('estudiantes');
    }
}
