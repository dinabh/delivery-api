<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeliveryTime;
use Faker\Generator as Faker;

$factory->define(DeliveryTime::class, function (Faker $faker) {
    return [
        'span' => $faker->numberBetween(1, 24)."->".$faker->numberBetween(1, 24),
    ];
});
