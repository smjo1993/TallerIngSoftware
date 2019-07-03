<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,29)->create();

        App\User::create([
            'name' => 'Sebastian Jara',
            'email' => 'smjo@asd.com',
            'password' => bcrypt('123')
        ]);
    }
}