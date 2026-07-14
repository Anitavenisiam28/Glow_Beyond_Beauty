<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register'); // sesuaikan dengan folder kamu
    }

    public function store(Request $request)
    {
        // VALIDASI
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:5'
        ]);

        // SIMPAN KE DATABASE
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // 🔥 WAJIB HASH
        ]);

        // AUTO LOGIN
        auth()->login($user);

        // REDIRECT
        return redirect()->route('layanan');
    }
}