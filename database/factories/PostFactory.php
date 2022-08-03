<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */

$factory->define(Post::class, function (Faker $faker) {
    return[
        'title'=>$faker->sentence
    ];
});
