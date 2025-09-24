<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $req)
    {
        $fields = $req->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:_users,email',
            'password' => 'required|string|confirmed',
            'phone' => 'nullable|string|max:8',
        ]);

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'phone' => $req->phone,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'User registered successfully',
            'data' => $user
        ]);
    }

    public function login(Request $req)
    {
        $fields = $req->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $req->email)->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Password doesn\'t match',
            ], 401);
        }

        return response()->json([
            'status' => 'success',
            'message' => 'User logged in successfully',
            'data' => $user
        ]);
    }
}
