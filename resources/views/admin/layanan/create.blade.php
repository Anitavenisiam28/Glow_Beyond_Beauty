```blade
@extends('layouts.admin')

@section('content')

<div class="container">

    <h3 class="mb-4">Tambah Layanan</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.layanan.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Layanan</label>
            <input
                type="text"
                name="nama"
                class="form-control"
                value="{{ old('nama') }}"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea
                name="deskripsi"
                class="form-control"
                rows="4"
                required>{{ old('deskripsi') }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input
                type="number"
                name="harga"
                class="form-control"
                value="{{ old('harga') }}"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input
                type="text"
                name="kategori"
                class="form-control"
                value="{{ old('kategori') }}"
                placeholder="Contoh: Facial, Hair Treatment, Spa">
        </div>

        <div class="mb-3">
            <label class="form-label">Durasi (Menit)</label>
            <input
                type="number"
                name="durasi"
                class="form-control"
                value="{{ old('durasi') }}"
                placeholder="60">
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Layanan</label>
            <input
                type="file"
                name="gambar"
                class="form-control"
                accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Icon Layanan</label>
            <input
                type="file"
                name="icon"
                class="form-control"
                accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('admin.layanan.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection
```
