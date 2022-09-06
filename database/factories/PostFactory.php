<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
$factory->define(Post::class, function (Faker $faker)
{
    return [
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
        ];
});
