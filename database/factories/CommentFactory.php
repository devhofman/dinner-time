<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use App\User;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'user_id' => App\User::all()->random()->id,
        'content' => $faker->sentence,
    ];
});
