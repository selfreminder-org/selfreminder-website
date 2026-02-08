<?php

use App\Models\User;

test('should return existing user when username or phone matches', function () {
    $user = User::factory()->create([
        'username' => 'testuser',
        'phone' => '08123456789',
    ]);

    $response = $this->postJson('/api/users/get-or-create', [
        'username' => 'testuser',
        'phone' => '09876543210',
    ]);

    $response->assertStatus(200)
        ->assertJson([
            'success' => true,
            'message' => 'User ditemukan',
            'data' => [
                'id' => $user->id,
                'username' => 'testuser',
            ],
        ]);
});

test('should create new user when username and phone do not exist', function () {
    $response = $this->postJson('/api/users/get-or-create', [
        'username' => 'newuser',
        'phone' => '08987654321',
    ]);

    $response->assertStatus(201)
        ->assertJson([
            'success' => true,
            'message' => 'User berhasil dibuat',
            'data' => [
                'username' => 'newuser',
                'phone' => '08987654321',
            ],
        ]);

    $this->assertDatabaseHas('users', [
        'username' => 'newuser',
        'phone' => '08987654321',
    ]);
});

test('should validate required fields', function () {
    $response = $this->postJson('/api/users/get-or-create', [
        'username' => 'testuser',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['phone']);
});

test('should validate username max length', function () {
    $response = $this->postJson('/api/users/get-or-create', [
        'username' => str_repeat('a', 51),
        'phone' => '08123456789',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['username']);
});
