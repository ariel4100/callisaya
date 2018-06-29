<?php

use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    return [
        'user_name' => $faker->name,
        'user_birthday' => $faker->date('Y-m-d'),
    ];
});
