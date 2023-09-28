@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="header h3 mb-4">All posts</h3>
            <a href="{{ route('posts.create') }}" class="btn bg-success text-light m-auto ml-4 mb-4 ">+ new</a>
            @include('panel.part.alert')
        </div>
        <div class="col-12 text-center">
            @if(count($posts) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nr</th>
                            <th>Title</th>
                            <th >Excerpt</th>
                            <th>Author</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th  style="text-align: right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            @include('panel.posts.part.item', ['post' => $post])
                        @endforeach
                    </tbody>
                </table>
                {{ $posts->links() }}
            @else
                <div class="p-3 alert-warning">Empty</div>
            @endif
        </div>
    </div>
@endsection
