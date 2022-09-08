<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserEndPointTest extends TestCase
{
    public function test_user_index_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [];

        $this->json('GET', '/api/user/index', $payload, $headers)
        ->assertStatus(200);
    }

    public function test_user_create_endpoint()
    {
        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'password_confirmation' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
        ];

        $this->json('POST', '/api/user/create', $payload, $headers)
        ->assertStatus(201);
    }

    public function test_user_show_endpoint()
    {
        $user = User::first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'user_id' => $user->id
        ];

        $this->json('POST', '/api/user/show', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'id', 
            'name', 
            'email', 
            'email_verified_at', 
            'created_at', 
            'updated_at'
        ]);
    }

    public function test_user_update_endpoint()
    {
        $user = User::first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'user_id' => $user->id,
            'name' => fake()->name(),
            'email' => $user->email
        ];

        $this->json('PUT', '/api/user/update', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'id', 
            'name', 
            'email', 
            'email_verified_at', 
            'created_at', 
            'updated_at'
        ]);
    }

    public function test_user_delete_endpoint()
    {
        $user = User::latest()->first();

        $headers = [
            'Authorization' => config('test.token')
        ];

        $payload = [
            'user_id' => $user->id
        ];

        $this->json('DELETE', '/api/user/delete', $payload, $headers)
        ->assertStatus(200)
        ->assertJsonStructure([
            'status',
            'user' => [
                'id', 
                'name', 
                'email', 
                'email_verified_at', 
                'created_at', 
                'updated_at'
            ]
        ]);
    }
}
