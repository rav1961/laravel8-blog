<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;

class PostsListController extends Controller
{
    public function __construct()
    {
    }

    public function __invoke()
    {
        return view('panel.posts.index');
    }
}
