```blade
@extends('layouts.admin')

@section('content')

<div class="container">

    <h3 class="mb-4">Edit Layanan</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.layanan.update', $layanan->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Layanan</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   value="{{ old('nama', $layanan->nama) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi"
                      class="form-control"
                      rows="4"
                      required>{{ old('deskripsi', $layanan->deskripsi) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number"
                   name="harga"
                   class="form-control"
                   value="{{ old('harga', $layanan->harga) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text"
                   name="kategori"
                   class="form-control"
                   value="{{ old('kategori', $layanan->kategori) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Durasi (Menit)</label>
            <input type="number"
                   name="durasi"
                   class="form-control"
                   value="{{ old('durasi', $layanan->durasi) }}">
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Saat Ini</label><br>

            @if($layanan->gambar)
                <img src="{{ asset('storage/'.$layanan->gambar) }}"
                     class="img-thumbnail mb-2"
                     width="180">
            @else
                <p class="text-muted">Belum ada gambar.</p>
            @endif

            <input type="file"
                   name="gambar"
                   class="form-control"
                   accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Icon Saat Ini</label><br>

            @if($layanan->icon)
                <img src="{{ asset('storage/'.$layanan->icon) }}"
                     class="img-thumbnail mb-2"
                     width="80">
            @else
                <p class="text-muted">Belum ada icon.</p>
            @endif

            <input type="file"
                   name="icon"
                   class="form-control"
                   accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="{{ route('admin.layanan.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection
```
