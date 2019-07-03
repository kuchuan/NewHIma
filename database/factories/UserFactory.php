<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        //
	    	'name' => $faker->name(), //名前 （日本語）
				'nickname' => $faker->firstKanaName(), // 単語
				'email' => $faker->unique()->safeEmail,
				'password' => $faker->password(),
				'remember_token' => str_random(10),
				'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
				'language' => $faker->country(),
				'area' => $faker->city(),
				'picture' => $faker->image($dir = '/tmp'),
				'created_at' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
    ];
});
