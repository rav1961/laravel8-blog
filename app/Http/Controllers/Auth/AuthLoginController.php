<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\Auth\AuthLoginService;

class AuthLoginController extends Controller
{
    private AuthLoginService $authLoginService;

    public function __construct(AuthLoginService $authLoginService)
    {
        $this->authLoginService = $authLoginService;
    }

    public function __invoke(LoginRequest $request)
    {
        $loginStatus = $this->authLoginService->handle($request->validated());

        if ($loginStatus) {
            return redirect()->intended('panel');
        }

        return back()->withErrors([
            'credentials' => 'Invalid data login',
        ]);
    }
}
