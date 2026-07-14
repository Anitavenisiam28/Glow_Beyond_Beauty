<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LayananController extends Controller
{
    public function index()
    {
        $data = Layanan::latest()->get();
        return view('admin.layanan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.layanan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kategori' => 'nullable|string|max:100',
            'durasi' => 'nullable|numeric',

            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:1024',
        ]);

        $data = $request->only([
            'nama',
            'deskripsi',
            'harga',
            'kategori',
            'durasi'
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')
                ->store('layanan', 'public');
        }

        // Upload icon
        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')
                ->store('layanan/icon', 'public');
        }

        Layanan::create($data);

        return redirect()
            ->route('admin.layanan.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $layanan = Layanan::findOrFail($id);

        return view('admin.layanan.edit', compact('layanan'));
    }

    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'kategori' => 'nullable|string|max:100',
            'durasi' => 'nullable|numeric',

            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:1024',
        ]);

        $data = $request->only([
            'nama',
            'deskripsi',
            'harga',
            'kategori',
            'durasi'
        ]);

        // Update gambar
        if ($request->hasFile('gambar')) {

            if ($layanan->gambar && Storage::disk('public')->exists($layanan->gambar)) {
                Storage::disk('public')->delete($layanan->gambar);
            }

            $data['gambar'] = $request->file('gambar')
                ->store('layanan', 'public');
        }

        // Update icon
        if ($request->hasFile('icon')) {

            if ($layanan->icon && Storage::disk('public')->exists($layanan->icon)) {
                Storage::disk('public')->delete($layanan->icon);
            }

            $data['icon'] = $request->file('icon')
                ->store('layanan/icon', 'public');
        }

        $layanan->update($data);

        return redirect()
            ->route('admin.layanan.index')
            ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $layanan = Layanan::findOrFail($id);

        if ($layanan->gambar && Storage::disk('public')->exists($layanan->gambar)) {
            Storage::disk('public')->delete($layanan->gambar);
        }

        if ($layanan->icon && Storage::disk('public')->exists($layanan->icon)) {
            Storage::disk('public')->delete($layanan->icon);
        }

        $layanan->delete();

        return redirect()
            ->route('admin.layanan.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
