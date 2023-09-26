<?php

namespace App\Repositories;

use App\Enums\Role;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    private User $user;

    public function __construct(User $user)
    {
        parent::__construct($user);

        $this->user = $user;
    }

    public function getByFirstName(string $firstName): ?User
    {
        return $this->user->where('first_name', '=', $firstName)->first();
    }

    public function getByEmail(string $email): ?User
    {
        return $this->user->where('email', '=', $email)->first();
    }

    public function getAllByRole(Role $role): Collection
    {
        return $this->user->where('role', '=', $role->value)->get();
    }

    public function isEmailExists(string $email): bool
    {
        $userByEmail = $this->getByEmail($email);

        return (bool) $userByEmail;
    }
}
