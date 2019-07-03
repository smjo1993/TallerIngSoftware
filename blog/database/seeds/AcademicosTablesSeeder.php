<?php

use Illuminate\Database\Seeder;

class AcademicosTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Academico::class, 20)->create();
        App\Academico::create([
            'id' => '1',
            'rut' => '5499932-1',
            'nombre' => 'Ignacio',
            'apellido_paterno' => 'Vieytes',
            'apellido_materno' => 'Vieytes',
            'email' => 'ivv@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '2',
            'rut' => '6905950-3',
            'nombre' => 'Arturo',
            'apellido_paterno' => 'Quinteros',
            'apellido_materno' => 'WatchTV',
            'email' => 'aqw@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '3',
            'rut' => '14897061-0',
            'nombre' => 'Rene',
            'apellido_paterno' => 'Torres',
            'apellido_materno' => 'Magnate',
            'email' => 'rtm@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '4',
            'rut' => '24256171-6',
            'nombre' => 'Franklin',
            'apellido_paterno' => 'Wong',
            'apellido_materno' => 'Honorable',
            'email' => 'fwh@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '5',
            'rut' => '14349093-9',
            'nombre' => 'James',
            'apellido_paterno' => 'Born',
            'apellido_materno' => 'Hidalgo',
            'email' => 'jbh@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '6',
            'rut' => '14924293-7',
            'nombre' => 'Maximiliano',
            'apellido_paterno' => 'Vidal',
            'apellido_materno' => 'Jaldin',
            'email' => 'mvj@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '7',
            'rut' => '5001378-2',
            'nombre' => 'Sergio',
            'apellido_paterno' => 'Ossandon',
            'apellido_materno' => 'Rojas',
            'email' => 'sor@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '8',
            'rut' => '12834783-6',
            'nombre' => 'Juan',
            'apellido_paterno' => 'Morales',
            'apellido_materno' => 'Uvas',
            'email' => 'jmu@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '9',
            'rut' => '8359280-k',
            'nombre' => 'Francisco',
            'apellido_paterno' => 'Chino',
            'apellido_materno' => 'Tocopilla',
            'email' => 'fct@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '10',
            'rut' => '16709306-k',
            'nombre' => 'John',
            'apellido_paterno' => 'Smith',
            'apellido_materno' => 'Galvez',
            'email' => 'jsg@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '11',
            'rut' => '23076628-2',
            'nombre' => 'Jennifer',
            'apellido_paterno' => 'Wallace',
            'apellido_materno' => 'Wallace',
            'email' => 'jww@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '12',
            'rut' => '21731186-1',
            'nombre' => 'Ahmad',
            'apellido_paterno' => 'Jarbour',
            'apellido_materno' => 'Vieytes',
            'email' => 'ajv@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '13',
            'rut' => '15739562-9',
            'nombre' => 'Alice',
            'apellido_paterno' => 'Zelaya',
            'apellido_materno' => 'Martinez',
            'email' => 'azm@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '14',
            'rut' => '20488554-0',
            'nombre' => 'Roberto',
            'apellido_paterno' => 'Espejo',
            'apellido_materno' => 'Melendez',
            'email' => 'rem@ucn.cl',
        ]);
        App\Academico::create([
            'id' => '15',
            'rut' => '20273568-1',
            'nombre' => 'Tito',
            'apellido_paterno' => 'Larrain',
            'apellido_materno' => 'Ortiz',
            'email' => 'tlo@ucn.cl',
        ]);
    }
}
