<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function getAll(): Collection;

    public function getById(int $id): ?Model;

    public function create(array $data): ?Model;

    public function update(int $id, array $data): bool;

    public function delete(int $id): bool;
}
