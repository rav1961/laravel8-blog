<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthController extends Controller
{
    /**
     * @return View
     */
    public function showLogin()
    {
        return view('pages.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        dd($request);
        //        if (Auth::attempt($credentials)) {
        //            return redirect()->intended('panel.view');
        //        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

    public function showRegister()
    {
        return view('pages.auth.register');
    }

    public function register(RegisterRequest $request)
    {
        //        $newUser = $this->userService->handle($request);
    }
}
