<?php

use Illuminate\Database\Seeder;

class EstudiantesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**factory(App\Estudiante::class, 30)->create()->each(function(App\Estudiante $estudiante){
            $estudiante->carreras()->attach([
                rand(1,5),
                rand(6,10),
            ]);**/
            
            App\Estudiante::create([
                'id' => '1',
                'rut' => '23156987-1',
                'nombre' => 'Roberto',
                'apellido_paterno' => 'Dominguez',
                'apellido_materno' => 'Dominguez',
                'carrera_id' => '1',
                'fono' => '123456',
                'email' => 'rdd@ucn.cl',
            ]);
        
    }
}
