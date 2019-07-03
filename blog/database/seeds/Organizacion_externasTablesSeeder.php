<?php

use Illuminate\Database\Seeder;

class Organizacion_externasTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\OrganizacionExterna::class, 20)->create();
        App\OrganizacionExterna::create([
            'id' => '1',
            'nombre' => 'DICOEA',
            'nombre_tutor' => 'Jorge Pizarro',
        ]);
        App\OrganizacionExterna::create([
            'id' => '2',
            'nombre' => 'DICOA',
            'nombre_tutor' => 'Jorge Pizarro',
        ]);
        App\OrganizacionExterna::create([
            'id' => '3',
            'nombre' => 'Aguas Antofagasta',
            'nombre_tutor' => 'Jorge Pizarro',
        ]);
        App\OrganizacionExterna::create([
            'id' => '4',
            'nombre' => 'DISC',
            'nombre_tutor' => 'Jorge Pizarro',
        ]);
        App\OrganizacionExterna::create([
            'id' => '5',
            'nombre' => 'Minera Escondida',
            'nombre_tutor' => 'Jorge Pizarro',
        ]);
    }
}
