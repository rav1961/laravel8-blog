<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

trait BaseRepositoryTrait
{
    public function getAll(): Collection
    {
        return $this->model->all();
    }

    public function getById(int $id): ?Model
    {
        return $this->model->findOrFail($id);
    }

    public function update(int $id, array $data): bool
    {
        return (bool) $this->model->where('id', $id)->update($data);
    }

    public function delete(int $id): bool
    {
        $model = $this->getById($id);

        return $model->deleteOrFail();
    }
}
