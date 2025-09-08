<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(2),
            'sku' => strtoupper(fake()->bothify('???-#####')),
            'price' => fake()->randomFloat(2, 1, 1000),
        ];
    }
}
