<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ToDo;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(ToDo::class, function (Faker $faker) {
    return [
        'title' => $faker->text($maxNbChars = 200),
        'complete' => $faker->biasedNumberBetween($min = 0, $max = 1)
    ];
});
