@extends('layouts.app');

@section('content')
    <div class="row">
        <div class="col-12 text-center">
            <h3 class="header h3 mb-5">All posts</h3>
            @include('panel.part.alert')
        </div>
        <div class="col-12 text-center">
            @if(count($posts) > 0)
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nr</th>
                            <th>Title</th>
                            <th>Excerpt</th>
                            <th>Author</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Actions</th>
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
