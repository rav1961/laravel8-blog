<?php

namespace App\Services\User;

use App\Exceptions\UserAlreadyExistsException;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

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
    public function store(array $data): ?User
    {
        if ($this->userRepository->isEmailExists($data['email'])) {
            throw new UserAlreadyExistsException();
        }

        $data['password'] = bcrypt($data['password']);

        return $this->userRepository->create($data);
    }
}
