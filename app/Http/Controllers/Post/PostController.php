<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Services\Post\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private const PAGINATE_LIMIT = 5;

    private PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->paginate(self::PAGINATE_LIMIT);

        return view('panel.posts.index', compact('posts'));
    }

    //    /**
    //     * Show the form for creating a new resource.
    //     *
    //     * @return \Illuminate\Http\Response
    //     */
    //    public function create()
    //    {
    //        //
    //    }
    //
    //    /**
    //     * Store a newly created resource in storage.
    //     *
    //     * @return \Illuminate\Http\Response
    //     */
    //    public function store(Request $request)
    //    {
    //        //
    //    }
    //
    //    /**
    //     * Display the specified resource.
    //     *
    //     * @param  int  $id
    //     * @return \Illuminate\Http\Response
    //     */
    //    public function show($id)
    //    {
    //        //
    //    }
    //
    //    /**
    //     * Show the form for editing the specified resource.
    //     *
    //     * @param  int  $id
    //     * @return \Illuminate\Http\Response
    //     */
    //    public function edit($id)
    //    {
    //        //
    //    }
    //
    //    /**
    //     * Update the specified resource in storage.
    //     *
    //     * @param  int  $id
    //     * @return \Illuminate\Http\Response
    //     */
    //    public function update(Request $request, $id)
    //    {
    //        //
    //    }

    public function destroy(int $id)
    {
        if ($this->postService->delete($id)) {
            return back()->with('success', 'Post removed');
        }

        return back()->with('error', 'No delete post');
    }
}
