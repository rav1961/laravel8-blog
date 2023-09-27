@extends('layouts.app')

<style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }
</style>

@section('content')
    <main class="form-signin">
        <form method="post" action="{{ route('login') }}">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="test@test.pl">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="test">
                <label for="password">Password</label>
            </div>

            <div class="checkbox mb-3">

            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            @error('auth')
                <div class="mt-4 alert alert-danger">test</div>
            @enderror
        </form>
    </main>
@endsection
