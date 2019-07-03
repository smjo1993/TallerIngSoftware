<?php

use Faker\Generator as Faker;

$factory->define(App\OrganizacionExterna::class, function (Faker $faker) {
    return [
        //'codigo' => rand(1,30),
        'nombre' => $faker->text(10),
    ];
});
