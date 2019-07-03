<?php

use Faker\Generator as Faker;

$factory->define(App\ActividadTitulacion::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'nombre' => $title,
        //'slug' => str_slug($title),
        'duracion' => rand(1,4),
        'comision' => $faker->randomElement(['SI', 'NO']),
        'cant_estudiante' => rand(1,5),
    ];
});
