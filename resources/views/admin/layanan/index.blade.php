@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Layanan</h3>

        <a href="{{ route('admin.layanan.create') }}" class="btn btn-primary">
            + Tambah Layanan
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">

        <table class="table table-bordered table-hover align-middle bg-white">

            <thead class="table-dark">
                <tr>
                    <th width="50">No</th>
                    <th>Gambar</th>
                    <th>Icon</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Durasi</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

            @forelse($data as $i => $d)

                <tr>

                    <td>{{ $i + 1 }}</td>

                    {{-- Gambar --}}
                    <td>
                        @if($d->gambar)
                            <img src="{{ asset('storage/'.$d->gambar) }}"
                                 width="80"
                                 class="img-thumbnail">
                        @else
                            <span class="text-muted">Tidak ada</span>
                        @endif
                    </td>

                    {{-- Icon --}}
                    <td>
                        @if($d->icon)
                            <img src="{{ asset('storage/'.$d->icon) }}"
                                 width="40">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>

                    <td>{{ $d->nama }}</td>

                    <td>{{ $d->kategori }}</td>

                    <td>
                        {{ $d->durasi }}
                        @if($d->durasi)
                            Menit
                        @endif
                    </td>

                    <td>
                        Rp {{ number_format($d->harga,0,',','.') }}
                    </td>

                    <td>{{ $d->deskripsi }}</td>

                    <td>

                        <a href="{{ route('admin.layanan.edit',$d->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="{{ route('admin.layanan.destroy',$d->id) }}"
                              method="POST"
                              style="display:inline;"
                              onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

            @empty

                <tr>
                    <td colspan="9" class="text-center">
                        Belum ada data layanan.
                    </td>
                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection