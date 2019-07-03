<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Room_user;
use Faker\Generator as Faker;

$factory->define(Room_user::class, function (Faker $faker) {
    return [
        //
				'skill_id' => $faker->numberBetween($min = 1, $max = 20),
				'user_id' => $faker->numberBetween($min = 1, $max = 10),
				'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
