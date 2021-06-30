<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth2.login');
    }

    public function loginpost(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard');
        }

        return redirect('login')->with('statuscek', 'Email & Password Salah');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('status', 'Anda Berhasil Logout');
    }
}
