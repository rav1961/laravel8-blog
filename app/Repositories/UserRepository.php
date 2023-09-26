<?php

namespace App\Repositories;

use App\Enums\Role;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use App\Traits\BaseRepositoryTrait;
use Illuminate\Database\Eloquent\Collection;

class UserRepository implements UserRepositoryInterface
{
    use BaseRepositoryTrait;

    private User $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function create(array $data): ?User
    {
        $newModel = $this->model->create($data);

        return $newModel->fresh();
    }

    public function getByFirstName(string $firstName): ?User
    {
        return $this->model->where('first_name', '=', $firstName)->first();
    }

    public function getByEmail(string $email): ?User
    {
        return $this->model->where('email', '=', $email)->first();
    }

    public function getAllByRole(Role $role): Collection
    {
        return $this->model->where('role', '=', $role->value)->get();
    }

    public function isEmailExists(string $email): bool
    {
        $userByEmail = $this->getByEmail($email);

        return (bool) $userByEmail;
    }
}
