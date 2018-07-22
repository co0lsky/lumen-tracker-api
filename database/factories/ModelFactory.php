<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
    ];
});

$factory->define(App\Tracker::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1000, 9999),
        'code' => str_random(10),
    ];
});

$factory->define(App\TrackerLocation::class, function (Faker\Generator $faker, $trackerId) {
    return [
        'tracker_id' => $trackerId,
        'name' => $faker->secondaryAddress,
        'lat' => $faker->latitude,
        'lng' => $faker->longitude,
    ];
});

$factory->define(App\Tracking::class, function (Faker\Generator $faker) {
    return [
        'tracker_id' => function () {
            return factory(App\Tracker::class)->create()->id;
        },
        'tracking_tracker_id' => function () {
            return factory(App\Tracker::class)->create()->id;
        }
    ];
});
