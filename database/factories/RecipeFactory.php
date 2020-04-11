<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;
use App\User;
use App\Category;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'user_id' => App\User::all()->random()->id,
        'about' => $faker->sentence,
        'category' => App\Category::all()->random()->id,
        'ingredients' => $faker->sentence,
        'how_prepare' => $faker->sentence,
        'time_prepare' => $faker->randomDigit
    ];
});
