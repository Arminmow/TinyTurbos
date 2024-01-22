<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }
}
