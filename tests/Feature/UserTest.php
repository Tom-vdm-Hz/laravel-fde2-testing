<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function testItCreatesUserInDatabaseOnGoodRequestWithoutPassword(): void
    {
        // Given (Arrange)
        $route = route('users.store');
        $requestBody = [
            'email' => 'john@example.com',
            'first_name' => 'John',
            'last_name' => 'Doe',
        ];

        // When (Act)
        $response = $this->post($route, $requestBody);

        // Then (Assert)
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);
    }

    public function testItCreatesUserInDatabaseOnGoodRequestWithPassword(): void
    {
        // Given (Arrange)
        $route = route('users.store');
        $requestBody = [
            'email' => 'john@example.com',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'password' => 'longpassword',
            'password_confirmation' => 'longpassword',
        ];

        // When (Act)
        $response = $this->post($route, $requestBody);

        // Then (Assert)
        $response->assertStatus(302);
        $response->assertSessionHasNoErrors();
        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', [
            'email' => 'john@example.com',
        ]);
    }

    public function testItGivesValidationMessageOnBadRequest(): void
    {
        // Given (Arrange)
        $route = route('users.store');
        $requestBody = [
            'email' => 'john@example.com',
            'first_name' => '',
            'last_name' => 'Doe',
        ];

        // When (Act)
        $response = $this->post($route, $requestBody);

        // Then (Assert)
        $response->assertStatus(302);
        $response->assertSessionHasErrors(['first_name']);
    }

    public function testItDeletesUserWithCorrectId(): void
    {
        // Given (Arrange)
        $user = User::factory()->create();
        $route = route('users.destroy', $user->id);

        // When (Act)
        $response = $this->delete($route);

        // Then (Assert)
        $response->assertStatus(302);
        $this->assertDatabaseCount('users', 0);
    }
}
