<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DeliveryDates;
use Faker\Generator as Faker;

$factory->define(DeliveryDates::class, function (Faker $faker) {
    return [
        'day_name' => $faker->dayOfWeek,
        'date' => $faker->date(),
        'city_id' => $faker->numberBetween(1, 3),
        'delivery_times_id' => $faker->numberBetween(1, 7),
    ];
});
