<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'category_id' => 1,
            'title' => $this->faker->title(),
            'content' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
        ];
    }
}
