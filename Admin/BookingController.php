<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Menampilkan seluruh data booking
     */
    public function index()
    {
        $bookings = Booking::latest()->get();

        return view('admin.booking.index', compact('bookings'));
    }

    /**
     * Form tambah booking (opsional)
     */
    public function create()
    {
        return view('admin.booking.create');
    }

    /**
     * Simpan booking baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'            => 'required',
            'umur'            => 'required|integer',
            'jenis_kelamin'   => 'required',
            'layanan'         => 'required',
            'tanggal'         => 'required|date',
            'jam'             => 'required',
        ]);

        Booking::create($request->all());

        return redirect()
            ->route('admin.booking.index')
            ->with('success', 'Booking berhasil ditambahkan.');
    }

    /**
     * Detail booking (opsional)
     */
    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.booking.show', compact('booking'));
    }

    /**
     * Form edit booking
     */
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);

        return view('admin.booking.edit', compact('booking'));
    }

    /**
     * Update booking
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'status' => 'required'
    ]);

    $booking = Booking::findOrFail($id);

    $booking->update([
        'status' => $request->status
    ]);

    return redirect()
        ->route('admin.booking.index')
        ->with('success', 'Status booking berhasil diperbarui.');
}

    /**
     * Hapus booking
     */
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->delete();

        return redirect()
            ->route('admin.booking.index')
            ->with('success', 'Booking berhasil dihapus.');
    }
}