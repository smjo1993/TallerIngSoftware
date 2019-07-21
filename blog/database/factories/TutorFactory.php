<?php

use Faker\Generator as Faker;

$factory->define(App\Tutor::class, function (Faker $faker) {
    $rut = $faker->text(10);
    return [
        'rut' => $rut,
        'nombre' => $faker->text(10),
        'id_organizacion' => rand(1,20),
    ];
});
