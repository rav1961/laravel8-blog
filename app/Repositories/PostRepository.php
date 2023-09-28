<?php

namespace App\Repositories;

use App\Interfaces\PostRepositoryInterface;
use App\Models\Post;
use App\Traits\BaseRepositoryTrait;

class PostRepository implements PostRepositoryInterface
{
    use BaseRepositoryTrait;

    private Post $model;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function getAllWithPaginate(int $limit)
    {
        return $this->model->with('user')->paginate($limit);
    }

    public function create(array $data): ?Post
    {
        $newPost = $this->model->create($data);

        return $newPost->fresh();
    }
}
