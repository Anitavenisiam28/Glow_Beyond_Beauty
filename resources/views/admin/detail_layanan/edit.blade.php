@extends('layouts.admin')

@section('content')

<h3>Detail Layanan: {{ $layanan->nama }}</h3>

<form action="{{ route('admin.detail.update',$layanan->id) }}" method="POST">
@csrf

<div class="mb-3">
    <label>Deskripsi Lengkap</label>
    <textarea name="deskripsi_lengkap" class="form-control">
        {{ $detail->deskripsi_lengkap ?? '' }}
    </textarea>
</div>

<div class="mb-3">
    <label>Manfaat</label>
    <textarea name="manfaat" class="form-control">
        {{ $detail->manfaat ?? '' }}
    </textarea>
</div>

<div class="mb-3">
    <label>Prosedur</label>
    <textarea name="prosedur" class="form-control">
        {{ $detail->prosedur ?? '' }}
    </textarea>
</div>

<button class="btn btn-success">Simpan</button>

</form>

@endsection