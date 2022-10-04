<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Suppleir;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductEndPointTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_product_index_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [];

        $this->json('GET', '/api/product/index', $payload, $headers)->assertStatus(200);
    }

    public function test_product_create_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'name' => fake()->word(),
            'suppleir_id' => Suppleir::factory(),
            'category_id' => Category::factory(),
            'quantityPerUnit' => fake()->randomDigit(),
            'unitPrice' => fake()->randomFloat()
        ];

        $this->json('POST', 'api/product/create', $payload, $headers)->assertStatus(201);
    }
}
