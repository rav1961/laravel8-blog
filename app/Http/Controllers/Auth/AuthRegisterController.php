<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Services\User\CreateUserService;
use Illuminate\Support\Facades\Redirect;

class AuthRegisterController extends Controller
{
    private CreateUserService $createUserService;

    public function __construct(CreateUserService $createUserService)
    {
        $this->createUserService = $createUserService;
    }

    public function __invoke(RegisterRequest $request)
    {
        $data = $request->validated();

        $newUser = $this->createUserService->handle($data);

        return Redirect::route('login.view')
            ->with('success', 'Rejestracja przebiegła pomyślnie, zalogouj się');
    }
}
