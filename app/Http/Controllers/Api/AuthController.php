<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illmuniate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register (Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|unique:users|max:100',
            'password' => 'required',
        ]);

        //password encryption
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'user' => $user,
        ], 201);
    }
}
