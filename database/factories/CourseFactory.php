<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'category_id' => $this->faker->numberBetween(1, 10), 
            'img' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean(80), // 80% chance to be active
        ];
    }
}
