<?php

use Illuminate\Database\Seeder;

class TutorsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Tutor::class, 20)->create();
        
        App\Tutor::create([
            'id' => '1',
            'rut' => '7866613-7',
            'nombre' => 'Jorge Pizarro',
            'id_organizacion' => '2',
        ]);
        App\Tutor::create([
            'id' => '2',
            'rut' => '15113969-8',
            'nombre' => 'Julio Soublet',
            'id_organizacion' => '3',
        ]);
        App\Tutor::create([
            'id' => '3',
            'rut' => '22624020-9',
            'nombre' => 'Jose Barrientos',
            'id_organizacion' => '1',
        ]);
        App\Tutor::create([
            'id' => '4',
            'rut' => '24137164-6',
            'nombre' => 'Sebastian Ayala',
            'id_organizacion' => '3',
        ]);
        App\Tutor::create([
            'id' => '5',
            'rut' => '5824507-0',
            'nombre' => 'Constanza Delgado',
            'id_organizacion' => '5',
        ]);
        App\Tutor::create([
            'id' => '6',
            'rut' => '19726623-6',
            'nombre' => 'Juan Molina',
            'id_organizacion' => '1',
        ]);
    }
}
