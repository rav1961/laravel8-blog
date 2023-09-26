<?php

namespace App\Http\Controllers;

use App\Services\User\CreateUserService;

class EmailTestController extends Controller
{
    private CreateUserService $createUserService;

    public function __construct(CreateUserService $userService)
    {
        $this->createUserService = $userService;
    }

    public function send()
    {
        try {
            $data = [
                'first_name' => 'RR',
                'email' => time().'@gmail.com',
                'password' => 'admin',
                'role' => \App\Enums\Role::ADMIN,
            ];
            $this->createUserService->handle($data);
            echo 'ok';
        } catch (\Exception $e) {
            dd($e);
        }
    }
}
