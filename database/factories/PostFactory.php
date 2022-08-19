<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

<<<<<<< HEAD
/*
    *@extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
=======
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
>>>>>>> cd1b3b09bcc3f66fc16614db6a6e07fc1af41637
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
<<<<<<< HEAD
            'user_id' => 1,
            'title'   => $this->faker->sentence,
            'body'    => $this->faker->text(800),
=======
            //
>>>>>>> cd1b3b09bcc3f66fc16614db6a6e07fc1af41637
        ];
    }
}
