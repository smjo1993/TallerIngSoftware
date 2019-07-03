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
        factory(App\TrabajoTitulacion::class, 20)->create()->each(function(App\TrabajoTitulacion $trabajo){
            $trabajo->estudiantes()->attach([
                rand(1,15),
                rand(16,30),
            ]);
            $trabajo->academicos()->attach([
                rand(1,5),
                rand(6,10),
                rand(11,15),
            ]);
        });
    }
}
