@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-3">
            <a href="{{ route('posts.index') }}" class="d-inline-block btn-link mb-5"><- back</a>
            <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-warning">edit</a>
            <a href="{{ route('posts.destroy', ['post' => $post->id]) }}" class="btn btn-danger">delete</a>
        </div>
        <div class="col-9"></div>
    </div>
    <div class="row">
        <div class="col-12 text-center">

            <br />
            <h3 class="header h3 m-0">{{ $post->title }}</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            @if(is_null($post->image_url))
                <img src="https://placehold.jp/30/dd6699/ffffff/300x150.png?text=no+image" class="img-thumbnail" alt="no image">
            @else
                <span class="bg-"></span>
            @endif
        </div>
        <div class="col-8">{{ $post->content }}</div>
    </div>
@endsection
