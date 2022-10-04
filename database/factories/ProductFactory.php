<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{Suppleir, Category};

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
            'name' => fake()->word(),
            'suppleir_id' => Suppleir::factory(),
            'category_id' => Category::factory(),
            'quantityPerUnit' => fake()->randomDigit(),
            'unitPrice' => fake()->randomFloat()
        ];
    }
}
