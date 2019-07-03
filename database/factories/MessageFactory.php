<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
	      //
				'id' => $faker->numberBetween($min = 1, $max = 10),
				'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
				'user_toggle' => 0, //0はユーザー
				'talk' => $faker->realtext($maxNbChars = 20),
    ];
});
