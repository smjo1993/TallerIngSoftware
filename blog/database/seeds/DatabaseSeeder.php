<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Blog
        //$this->call(UsersTableSeeder::class);
        //$this->call(CategoriesTableSeeder::class);
        //$this->call(TagsTableSeeder::class);
        //$this->call(PostsTableSeeder::class);

         //Proyecto
         $this->call(AcademicosTablesSeeder::class);
         $this->call(Actividad_titulacionsTablesSeeder::class);
         $this->call(CarrerasTablesSeeder::class);
         $this->call(EstudiantesTablesSeeder::class);
         $this->call(Organizacion_externasTablesSeeder::class);
         //$this->call(Trabajo_titulacionsTablesSeeder::class);
         
    }
}