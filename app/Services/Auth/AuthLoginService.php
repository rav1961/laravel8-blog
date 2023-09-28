<?php

namespace App\Services\Auth;

use Illuminate\Support\Facades\Auth;

class AuthLoginService
{
    public function handle($credentials): bool
    {
        if (Auth::attempt($credentials)) {
            return true;
        }

        return false;
    }
}
