<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DetailLayanan;
use App\Models\Layanan;
use Illuminate\Http\Request;

class DetailLayananController extends Controller
{
    public function edit($layanan_id)
    {
        $layanan = Layanan::findOrFail($layanan_id);
        $detail = DetailLayanan::where('layanan_id',$layanan_id)->first();

        return view('admin.detail_layanan.edit', compact('layanan','detail'));
    }

    public function update(Request $request, $layanan_id)
    {
        DetailLayanan::updateOrCreate(
            ['layanan_id' => $layanan_id],
            [
                'deskripsi_lengkap' => $request->deskripsi_lengkap,
                'manfaat' => $request->manfaat,
                'prosedur' => $request->prosedur
            ]
        );

        return back()->with('success','Detail berhasil disimpan');
    }
}