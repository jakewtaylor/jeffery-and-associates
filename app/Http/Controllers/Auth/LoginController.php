<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function index () {
        return view('auth.login');
    }

    public function authenticate (Request $request) {
        $credentials = [
            "username" => strtolower($request->input('username')),
            "password" => $request->input('password'),
        ];

        $remember = $request->input('remember');

        if (Auth::attempt($credentials, !!$remember)) {
            return redirect()->intended(route('dashboard'));
        }

        return back()->withInput()->withErrors(['Incorrect username or password!']);
    }

    public function logout () {
        Auth::logout();
        return redirect('login');
    }
}
