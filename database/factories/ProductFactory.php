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
    public function definition()
    {
        return [
            'name' => $this->faker->firstname,
            'price_in_cents' => $this->faker->numberBetween(10,100) * 100,
            'details' => $this->faker->text,
            'publish' => $this->faker->randomElement(["Yes", "No"])
        ];
    }
}
