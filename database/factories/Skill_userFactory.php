	<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Skill_user;
use Faker\Generator as Faker;

$factory->define(Skill_user::class, function (Faker $faker) {
    return [
        //
				'user_id' => $faker->numberBetween($min = 1, $max = 10),
				'skill_id' => $faker->numberBetween($min = 1, $max = 20),
				'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
