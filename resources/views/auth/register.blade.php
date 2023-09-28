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
                <input type="text" name="first_name" class="form-control" id="floatingName" placeholder="your first name">
                <label for="floatingName">First Name</label>
                @if ($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif
            </div>

            <div class="form-floating mb-4">
                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                <label for="floatingEmail">Email address</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="form-floating mb-4">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-floating mb-4">
                <input type="password" name="password-confirm" class="form-control" id="password-confirm" placeholder="Password">
                <label for="password-confirm">Confirm password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
    </main>
@endsection
