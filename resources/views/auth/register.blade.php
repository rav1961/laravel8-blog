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
        <form method="post" action="{{ route('register') }}">
            @csrf

            <h1 class="h3 mb-3 fw-normal">Please Register</h1>

            <div class="form-floating mb-4">
                <input type="text" name="first_name" class="form-control" id="floatingName" placeholder="your first name" value="{{ old('first_name') }}">
                <label for="floatingName">First Name</label>
                @error('first_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating mb-4">
                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com" value="{{ old('email') }}">
                <label for="floatingEmail">Email address</label>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm password">
                <label for="password_confirmation">Confirm password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
    </main>
@endsection
