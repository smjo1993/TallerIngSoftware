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
        ]);
        App\TrabajoTitulacion::create([
            'id' => '2',
            'nombre' => 'trabajo2',
            'fecha_inicio' => '2015-10-22',
            'fecha_termino' => '2016-06-22',
            'estado' => 'INGRESADA',
            'id_actividad' => '2',
            'id_academico' => '2',
        ]);
    }
}
