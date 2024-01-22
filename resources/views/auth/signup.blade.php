@extends('partials.default')

@section('content')
    <div class="container">
        <div class="signup-container">
            <h2>Sign Up</h2>
            <form method="post" action="{{ route('auth.signup') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                           id="username" name="username" placeholder="Enter your username">
                    <span class="invalid-feedback">{{ $errors->first('username') }}</span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" placeholder="Enter your email">
                    <span class="invalid-feedback">{{ $errors->first('email') }}</span>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password"
                           placeholder="Enter your password">
                    <span class="invalid-feedback">{{ $errors->first('password') }}</span>
                </div>
                <button type="submit" class="btn btn-signup btn-block">Sign Up</button>
            </form>
        </div>
    </div>
@stop
