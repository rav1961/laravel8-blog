<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthLogoutController extends Controller
{
    public function __invoke()
    {
        Auth::logout();

        return redirect('/');
    }
}
