<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $title = fake()->sentence(5);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => fake()->paragraph(25),
            'date' => fake()->date(),
            'type' => 'text',
        ];
    }
    public function suspended()
    {
        return $this->state(function (array $attributes) {
            return [
                "content" => null,
                "type"  => 'photo',
                "image" => fake()->imageUrl(500, 300),
            ];
        });
    }
}
