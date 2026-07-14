<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // VALIDASI
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // CEK LOGIN
        if (auth()->attempt($request->only('email','password'))) {

            $request->session()->regenerate(); // 🔥 penting

            return redirect()->route('layanan'); // arahkan setelah login
        }

        return back()->with('error','Email atau password salah');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('login');
    }
}