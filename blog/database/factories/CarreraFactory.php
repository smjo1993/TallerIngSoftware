<?php

use Faker\Generator as Faker;

$factory->define(App\Carrera::class, function (Faker $faker) {
    return [
        //'id' => rand(1,30),
        'descripcion' => $faker->text(10),
    ];
});
