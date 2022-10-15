<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'companyName' => fake()->company(),
            'contactName' => fake()->name(),
            'contactTitle' => fake()->jobTitle(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'region' => fake()->state(),
            'postalCode' => fake()->postcode(),
            'country' => fake()->country(),
            'phone' => fake()->phoneNumber()
        ];
    }
}
