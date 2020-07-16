<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

<<<<<<< HEAD
use App\blog;
use Faker\Generator as Faker;

$factory->define(blog::class, function (Faker $faker) {
    return [
        'title' =>$faker->userName,
        'description' =>$faker->text(45),
        'author_id' =>$faker->numberBetween(1, 10),
        'orders'=>$faker->numberBetween(0, 1000),
        'revenue'=>$faker->numberBetween(0, 1000),
        'price'=>$faker->numberBetween(0, 15),
        'sold'=>$faker->numberBetween(0, 1000),
        'salereport'=>$faker->numberBetween(0, 20000),
=======
use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        //
>>>>>>> 2ae050481c7297f9a574bec5b33ffa2a32f35a2b
    ];
});
