<?php

namespace App\Interfaces;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function create(array $data): ?User;

    public function getByFirstName(string $firstName): ?User;

    public function getByEmail(string $email): ?User;

    public function getAllByRole(Role $role): Collection;

    public function isEmailExists(string $email): bool;
}
