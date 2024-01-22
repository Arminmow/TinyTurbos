@extends('partials.default')

@section('content')
    <div class="container">
        <div class="signup-container">
            <h2>Sign Up</h2>
            <form>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter your username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-signup btn-block">Sign Up</button>
            </form>
        </div>
    </div>
@stop
