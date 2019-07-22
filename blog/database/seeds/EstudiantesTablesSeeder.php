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
            App\Estudiante::create([
                'id' => '2',
                'rut' => '24859875-1',
                'nombre' => 'Aldo',
                'apellido_paterno' => 'London',
                'apellido_materno' => 'Burguez',
                'carrera_id' => '1',
                'fono' => '123456',
                'email' => 'aaa@ucn.cl',
            ]);
            App\Estudiante::create([
                'id' => '3',
                'rut' => '13063857-0',
                'nombre' => 'Alfredo',
                'apellido_paterno' => 'Batian',
                'apellido_materno' => 'Barbaro',
                'carrera_id' => '2',
                'fono' => '123456',
                'email' => 'bbb@ucn.cl',
            ]);
            App\Estudiante::create([
                'id' => '4',
                'rut' => '21469916-8',
                'nombre' => 'Alekos',
                'apellido_paterno' => 'Khonenkampz',
                'apellido_materno' => 'Junnin',
                'carrera_id' => '2',
                'fono' => '123456',
                'email' => 'ddd@ucn.cl',
            ]);
            App\Estudiante::create([
                'id' => '5',
                'rut' => '9135867-0',
                'nombre' => 'Eduardo',
                'apellido_paterno' => 'Coke',
                'apellido_materno' => 'Cokius',
                'carrera_id' => '1',
                'fono' => '123456',
                'email' => 'eee@ucn.cl',
            ]);
            App\Estudiante::create([
                'id' => '6',
                'rut' => '23412249-5',
                'nombre' => 'Francisco',
                'apellido_paterno' => 'Aldarik',
                'apellido_materno' => 'Bendicion',
                'carrera_id' => '1',
                'fono' => '123456',
                'email' => 'fff@ucn.cl',
            ]);
            App\Estudiante::create([
                'id' => '7',
                'rut' => '8012545-3',
                'nombre' => 'Luciano',
                'apellido_paterno' => 'Bribbo',
                'apellido_materno' => 'Figueroa',
                'carrera_id' => '4',
                'fono' => '123456',
                'email' => 'ggg@ucn.cl',
            ]);
            App\Estudiante::create([
                'id' => '8',
                'rut' => '16664518-2',
                'nombre' => 'Huaso',
                'apellido_paterno' => 'Olmue',
                'apellido_materno' => 'Festival',
                'carrera_id' => '1',
                'fono' => '123456',
                'email' => 'hhh@ucn.cl',
            ]);
            App\Estudiante::create([
                'id' => '9',
                'rut' => '21896993-3',
                'nombre' => 'Ignacio',
                'apellido_paterno' => 'Tusar',
                'apellido_materno' => 'Bely',
                'carrera_id' => '1',
                'fono' => '123456',
                'email' => 'iii@ucn.cl',
            ]);
            App\Estudiante::create([
                'id' => '10',
                'rut' => '19795961-4',
                'nombre' => 'Jaime',
                'apellido_paterno' => 'Pizzas',
                'apellido_materno' => 'Doritos',
                'carrera_id' => '1',
                'fono' => '123456',
                'email' => 'jjj@ucn.cl',
            ]);
    }
}
