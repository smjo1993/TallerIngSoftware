<?php

use Illuminate\Database\Seeder;

class CarrerasTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Carrera::class, 20)->create();

        App\Carrera::create([
            'id' => '1',
            'descripcion' => 'ICCI'
        ]);

        App\Carrera::create([
            'id' => '2',
            'descripcion' => 'INGECO'
        ]);

        App\Carrera::create([
            'id' => '3',
            'descripcion' => 'INDUSTRIAL'
        ]);

        App\Carrera::create([
            'id' => '4',
            'descripcion' => 'PSICOLOGIA'
        ]);
        App\Carrera::create([
            'id' => '5',
            'descripcion' => 'DERECHO'
        ]);
        App\Carrera::create([
            'id' => '6',
            'descripcion' => 'PERIODISMO'
        ]);
        App\Carrera::create([
            'id' => '7',
            'descripcion' => 'INGESIS'
        ]);
        App\Carrera::create([
            'id' => '8',
            'descripcion' => 'ARQUITECTURA'
        ]);
        App\Carrera::create([
            'id' => '9',
            'descripcion' => 'IenCI'
        ]);
        App\Carrera::create([
            'id' => '10',
            'descripcion' => 'GEOLOGIA'
        ]);
    }
}
