<?php

namespace App\Services\User;

use App\Exceptions\UserAlreadyExistsException;
use App\Interfaces\UserRepositoryInterface;
use App\Mail\RegisterUserMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class CreateUserService
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @throws UserAlreadyExistsException
     */
    public function handle(array $data): ?User
    {
        if ($this->userRepository->isEmailExists($data['email'])) {
            throw new UserAlreadyExistsException();
        }

        $data['password'] = bcrypt($data['password']);

        $newUser = $this->userRepository->create($data);

        Mail::to($newUser->email)->send(new RegisterUserMail($newUser));

        return $newUser;
    }
}
