<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function login(array $credentials)
    {
        if (! Auth::attempt($credentials)) {
            abort(401);
        }

        $token = Auth::user()->createToken('authToken')->accessToken;

        return ['token' => $token];
    }
}
