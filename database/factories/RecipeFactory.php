<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Recipe;
use Faker\Generator as Faker;
use App\User;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'user_id' => App\User::all()->random()->id,
        'about' => $faker->sentence,
        'ingredients' => $faker->sentence,
        'prepare' => $faker->sentence
    ];
});
