<?php

use Faker\Generator as Faker;

$factory->define(App\comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text(20)
    ];
});
