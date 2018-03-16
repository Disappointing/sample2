<?php

use Faker\Generator as Faker;

$factory->define(App\Models\SjWg::class, function (Faker $faker) {
    $date_time = $faker->date . ' ' . $faker->time;
    return [
        //
        'name'    => $faker->name,
        'created_at' => $date_time,
        'updated_at' => $date_time,
    ];
});
