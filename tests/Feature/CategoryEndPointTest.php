<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryEndPointTest extends TestCase
{

    public function test_category_index_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [];

        $this->json('GET', '/api/category/index', $payload, $headers)
        ->assertStatus(200);
    }

    public function test_category_create_endpoint()
    {
        # code...
        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'name' => fake()->word(),
            'description' => fake()->text()
        ];

        $this->json('POST', 'api/category/create', $payload, $headers)
        ->assertStatus(201);
    }

    public function test_category_show_endpoint()
    {
        $category = Category::first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'category_id' => $category->id
        ];

        $this->json('POST', 'api/category/show', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'id', 'name', 'description'
        ]);
    }

    public function test_category_update_endpoint()
    {
        $category = Category::first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'category_id' => $category->id,
            'name' => fake()->word(),
            'description' => fake()->text()
        ];

        $this->json('PUT', 'api/category/update', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'id', 'name', 'description'
        ]);
    }

    public function test_category_delete_endpoint()
    {
        $category = Category::latest()->first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'category_id' => $category->id
        ];

        $this->json('DELETE', 'api/category/delete', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'status',
            'category' => [
                'id', 'name', 'description'
            ]
        ]);
    }
}
