<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{

    // Menampilkan halaman login admin
    public function index()
    {
        return view('admin.login');
    }

    // Proses login admin
    public function login(Request $request)
    {
        $admin = Admin::where('username', $request->username)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {

            Session::put('admin', $admin->id);

            return redirect('/admin/dashboard');

        }

        return back()->with('error', 'Username atau Password salah!');
    }

    // Logout admin
    public function logout()
    {
        Session::forget('admin');

        return redirect('/admin/login');
    }
}