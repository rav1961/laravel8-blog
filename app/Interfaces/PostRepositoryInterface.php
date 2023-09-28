<?php

namespace App\Interfaces;

use App\Models\Post;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function create(array $data): ?Post;

    public function getAllWithPaginate(int $limit);
}
