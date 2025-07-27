<?php

namespace Tests\Feature\Auth;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthRedirectTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_returns_correct_redirect_path_for_default_user(): void
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password123')
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'test@example.com',
            'password' => 'password123'
        ]);

        $response->assertStatus(200)
                ->assertJsonStructure(['redirect'])
                ->assertJson([
                    'redirect' => '/dashboard' // Default redirect path
                ]);
    }

    public function test_login_validation_messages_are_descriptive(): void
    {
        $response = $this->postJson('/api/login', [
            'email' => 'invalid-email',
            'password' => ''
        ]);

        $response->assertStatus(422)
                ->assertJsonValidationErrors([
                    'email' => 'Please enter a valid email address.',
                    'password' => 'Please enter your password.'
                ]);
    }
}
