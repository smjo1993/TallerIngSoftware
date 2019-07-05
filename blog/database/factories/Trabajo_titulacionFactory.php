<?php

use Faker\Generator as Faker;

$factory->define(App\TrabajoTitulacion::class, function (Faker $faker) {
    return [
        'nombre' => $faker->text(10),
        'fecha_inicio' => $faker.date.recent(),
        'fecha_termino'=> $faker->text(10),
        'estado' => $faker->randomElement(['ACEPTADA' , 'INGRESADA', 'FINALIZADA','ANULADA']),
        'id_actividad' => rand(1,3),
        'id_organizacion' => rand(1,5),
        'id_academico' => rand(1,15),
    ];
});
