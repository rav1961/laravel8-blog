@extends('layouts.app')

@section('content')
    <style>
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
    </style>

    <main class="form-signin">
        @if(session('success'))
            <div class="alert alert-success p-3">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger p-3">{{ session('error') }}</div>
        @endif

        <form method="post" action="{{ route('login') }}">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-4">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                <label for="email">Email address</label>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>

            @error('credentials')
                <div class="p-3 alert alert-danger">{{ $message }}</div>
            @enderror

            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
@endsection
