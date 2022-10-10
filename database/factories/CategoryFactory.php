<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use LaraDev\Models\Categories;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\LaraDev\Models\Model>
 */
class CategoryFactory extends Factory
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
            'slug' => Str::slug($title)
            

        ];
    }
}
