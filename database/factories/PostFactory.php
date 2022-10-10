<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use LaraDev\Models\Categories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\LaraDev\Models\Post>
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

        $title = fake()->sentence(10);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'subtitle' => fake()->sentence(10),
            'description' => fake()->paragraph(5),
            'publish_at' => fake()->dateTime(),
            'category' => function(){
                return Categories::factory()->create()->id;


            },

        ];
    }
}
