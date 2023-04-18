<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    { //on crée un jeu de faux posts
        return [
            'title' => fake()->sentence,
            'image' => fake()->imageUrl($width = 400, $height = 400),
            'content' => implode(fake()->paragraphs(3)),
            'user_id' => $this->faker->randomElement(User::pluck('id')),
        ];
    }
}