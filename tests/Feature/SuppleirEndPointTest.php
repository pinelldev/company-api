<?php

namespace Tests\Feature;

use App\Models\Suppleir;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SuppleirEndPointTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_suppleir_index_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [];

        $this->json('GET', 'api/suppleir/index', $payload, $headers)
        ->assertStatus(200);
    }

    public function test_suppleir_create_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
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

        $this->json('POST', 'api/suppleir/create', $payload, $headers)
        ->assertStatus(201);
    }

    public function test_suppleir_show_endpoint()
    {
        $suppleir = Suppleir::first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'suppleir_id' => $suppleir->id
        ];

        $this->json('POST', '/api/suppleir/show', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'id',
            'company',
            'contact',
            'title',
            'address',
            'city',
            'region',
            'postcode',
            'country',
            'phone'
        ]);
    }

    public function test_suppleir_update_endpoint()
    {
        $suppleir = Suppleir::first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'suppleir_id' => $suppleir->id,
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

        $this->json('PUT', 'api/suppleir/update', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'id',
            'company',
            'contact',
            'title',
            'address',
            'city',
            'region',
            'postcode',
            'country',
            'phone'
        ]);
    }

    public function test_suppleir_delete_endpoint()
    {
        $suppleir = Suppleir::latest()->first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'suppleir_id' => $suppleir->id
        ];

        $this->json('DELETE', 'api/suppleir/delete', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'status',
            'suppleir' => [
                'id',
                'companyName',
                'contactName',
                'contactTitle',
                'address',
                'city',
                'region',
                'postalCode',
                'country',
                'phone'
            ]
        ]);
    }
}
