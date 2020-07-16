<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
<<<<<<< HEAD
        'name' => $faker->city,
		'age' => $faker->numberBetween(18,60),
		'experience' => $faker->randomDigit,
=======
		  'name' => $faker->city,
		  'age' => $faker->numberBetween(18,60),
		  'experience' => $faker->randomDigit,
>>>>>>> 2ae050481c7297f9a574bec5b33ffa2a32f35a2b
    ];
});
