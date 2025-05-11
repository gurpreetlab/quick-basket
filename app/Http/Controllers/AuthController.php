<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // login
    public function login()
    {
        return view('auth.login');
    }

    // authenticate
    public function authenticate(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            // Authentication passed...
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // register
    public function register()
    {
        return view('auth.register');
    }

    // register user
    public function registerUser(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        Auth::login($user);

        return redirect()->route('home');
    }

    // forgot password
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    // logout
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
