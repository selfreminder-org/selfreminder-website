<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GetOrCreateUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     */
    public function users(): JsonResponse
    {
        $users = User::all();

        return response()->json([
            'success' => true,
            'data' => $users,
        ]);
    }

    /**
     * Get or create user by username and phone.
     */
    public function getOrCreate(GetOrCreateUserRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $user = User::query()
            ->where('username', $validated['username'])
            ->orWhere('phone', $validated['phone'])
            ->first();

        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'User ditemukan',
                'data' => $user,
            ]);
        }

        // Create new user
        $user = User::create([
            'username' => $validated['username'],
            'phone' => $validated['phone'],
            'name' => $validated['username'], // Default name dari username
            'password' => Str::random(16), // Generate random password
        ]);

        return response()->json([
            'success' => true,
            'message' => 'User berhasil dibuat',
            'data' => $user,
        ], 201);
    }
}
