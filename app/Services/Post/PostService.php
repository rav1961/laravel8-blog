<?php

namespace App\Services\Post;

use App\Interfaces\PostRepositoryInterface;

class PostService
{
    private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function paginate(int $limit)
    {
        return $this->postRepository->getAllWithPaginate($limit);
    }

    public function delete(int $postId): bool
    {
        return $this->postRepository->delete($postId);
    }
}
