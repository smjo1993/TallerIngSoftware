<?php

use Illuminate\Database\Seeder;

class Trabajo_titulacionsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**factory(App\TrabajoTitulacion::class, 20)->create()->each(function(App\TrabajoTitulacion $trabajo){
            $trabajo->estudiantes()->attach([
                rand(1,15),
                rand(16,30),
            ]);
            $trabajo->academicos()->attach([
                rand(1,5),
                rand(6,10),
                rand(11,15),
            ]);
        });*/
        App\TrabajoTitulacion::create([
            'id' => '1',
            'nombre' => 'trabajo1',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'INGRESADA',
            'id_actividad' => '1',
            'id_academico' => '1',
            'id_organizacion' => '2',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '2',
            'nombre' => 'trabajo2',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'INGRESADA',
            'id_actividad' => '2',
            'id_academico' => '2',
            'id_organizacion' => '5',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '4',
            'nombre' => 'trabajo4',
            'fecha_inicio' => '2017-10-22',
            'fecha_termino' => '2018-06-22',
            'estado' => 'INGRESADA',
            'id_actividad' => '1',
            'id_academico' => '3',
            'id_organizacion' => '3',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '5',
            'nombre' => 'trabajo5',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'ACEPTADA',
            'id_actividad' => '3',
            'id_academico' => '3',
            'id_organizacion' => '4',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '6',
            'nombre' => 'trabajo6',
            'fecha_inicio' => '2015-10-06',
            'fecha_termino' => '2016-06-06',
            'estado' => 'INGRESADA',
            'id_actividad' => '1',
            'id_academico' => '6',
            'id_organizacion' => '2',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '7',
            'nombre' => 'trabajo7',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'ACEPTADA',
            'id_actividad' => '1',
            'id_academico' => '2',
            'id_organizacion' => '1',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '8',
            'nombre' => 'trabajo8',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'INGRESADA',
            'id_actividad' => '1',
            'id_academico' => '1',
            'id_organizacion' => '5',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '9',
            'nombre' => 'trabajo9',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'INGRESADA',
            'id_actividad' => '2',
            'id_academico' => '2',
            'id_organizacion' => '4',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '10',
            'nombre' => 'trabajo10',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'ACEPTADA',
            'id_actividad' => '1',
            'id_academico' => '2',
            'id_organizacion' => '2',
        ]);
        App\TrabajoTitulacion::create([
            'id' => '11',
            'nombre' => 'trabajo11',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'ACEPTADA',
            'id_actividad' => '2',
            'id_academico' => '1',
            'id_organizacion' => '1',
        ]);
    }
}
