<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\UserAlreadyExistsException;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\RegisterRequest;
use App\Services\User\CreateUserService;

class AuthRegisterController extends Controller
{
    private CreateUserService $createUserService;

    public function __construct(CreateUserService $createUserService)
    {
        $this->createUserService = $createUserService;
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws UserAlreadyExistsException
     */
    public function __invoke(RegisterRequest $request)
    {
        $data = $request->validated();

        $this->createUserService->handle($data);

        return \redirect()->route('login.view')->with('success', 'User registered successfully!');
    }
}
