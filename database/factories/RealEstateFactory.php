<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RealEstate>
 */
class RealEstateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price' => fake()->numberBetween(1000000, 100000000),
            'address' => fake()->address(),
            'bedroom_count' => fake()->numberBetween(1, 5),
            'bathroom_count' => fake()->numberBetween(1, 5),
            'size' => fake()->numberBetween(1000, 5000),
        ];
    }
}
