<?php

use App\Models\User;

test('should return list of users', function () {
    User::factory()->count(3)->create();

    $response = $this->getJson('/api/users');

    $response->assertStatus(200)
        ->assertJsonStructure([
            'success',
            'data' => [
                '*' => ['id', 'username', 'phone', 'name', 'created_at', 'updated_at'],
            ],
        ]);

    $this->assertCount(3, $response->json('data'));
});