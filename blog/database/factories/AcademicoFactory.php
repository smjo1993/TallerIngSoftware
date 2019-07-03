<?php

use Faker\Generator as Faker;

$factory->define(App\Academico::class, function (Faker $faker) {
    $rut = $faker->text(10);
    return [
        'rut' => $rut,
        //'slug' => str_slug($rut),
        'nombre' => $faker->text(10),
        'apellido_paterno' => $faker->text(10),
        'apellido_materno' => $faker->text(10),
    ];
});
