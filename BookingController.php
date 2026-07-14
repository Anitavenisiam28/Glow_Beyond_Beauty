<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $layanans = \App\Models\Layanan::all();
        return view('booking.index', compact('layanans'));
    }

    public function store(Request $request)
    {
        $data = Booking::create($request->all());

        // format pesan WA
        $pesan = "Halo, saya ingin booking:\n\n".
                 "Nama: ".$data->nama."\n".
                 "Umur: ".$data->umur."\n".
                 "Jenis Kelamin: ".$data->jenis_kelamin."\n".
                 "Layanan: ".$data->layanan."\n".
                 "Tanggal: ".$data->tanggal."\n".
                 "Jam: ".$data->jam;

        $url = "https://wa.me/6281234567890?text=".urlencode($pesan);

        return redirect($url);
    }
}