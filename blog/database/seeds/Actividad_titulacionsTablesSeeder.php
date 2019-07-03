<?php

use Illuminate\Database\Seeder;

class Actividad_titulacionsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\ActividadTitulacion::class, 20)->create();+
        App\ActividadTitulacion::create([
            'id' => '1',
            'nombre' => 'Tesis',
            'duracion' => '2',
            'comision' => 'SI',
            'cant_estudiante' => '1',
        ]);
        App\ActividadTitulacion::create([
            'id' => '2',
            'nombre' => 'Capstone Project',
            'duracion' => '2',
            'comision' => 'SI',
            'cant_estudiante' => '5',
        ]);
        App\ActividadTitulacion::create([
            'id' => '3',
            'nombre' => 'Memoria',
            'duracion' => '2',
            'comision' => 'NO',
            'cant_estudiante' => '2',
        ]);

    }
}
