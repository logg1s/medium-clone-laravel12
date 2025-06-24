<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Str;

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
    {
        $title = fake()->sentence();
        return [
            "image" => "https://picsum.photos/640/480",
            "title" => $title,
            "slug" => Str::slug($title),
            "content" => fake()->paragraph(),
            "category_id" => Category::inRandomOrder()->first()->id,
            "user_id" => User::first()->id,
            "published_at" => fake()->dateTime(),
        ];
    }
}
