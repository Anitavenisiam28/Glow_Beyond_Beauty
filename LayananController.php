<?php

namespace App\Http\Controllers;

use App\Models\Layanan;

class LayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::all(); // 🔥 INI WAJIB ADA
        return view('layanan.index', compact('layanans'));
    }

    public function detail($id)
    {
        $data = Layanan::findOrFail($id);
        return view('layanan.detail', compact('data'));
    }
}