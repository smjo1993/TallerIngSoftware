<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActividadTitulacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actividad_titulacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 128);
            //$table->string('slug', 128);
            $table->integer('duracion')->unsigned();
            $table->enum('comision', ['SI' , 'NO'])->default('SI');
            $table->integer('cant_estudiante')->unsigned();
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
        Schema::dropIfExists('actividad_titulacions');
    }
}
