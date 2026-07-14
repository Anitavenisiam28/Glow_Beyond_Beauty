
@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">LAYANAN KAMI</h2>
        <h4 class="mt-3">Treatment Unggulan Untuk Kulit Anda</h4>
        <p class="text-muted">
            Setiap perawatan dirancang khusus oleh tim ahli kecantikan kami.
        </p>
    </div>

    <div class="row">

        @forelse($layanans as $item)

        <div class="col-lg-4 col-md-6 mb-4">

            <div class="card h-100 shadow border-0">

                {{-- Gambar Layanan --}}
                @if($item->gambar)
                    <img src="{{ asset('storage/'.$item->gambar) }}"
                         class="card-img-top"
                         alt="{{ $item->nama }}"
                         style="height:220px; object-fit:cover;">
                @else
                    <div class="text-center py-5 bg-light">
                        Tidak ada gambar
                    </div>
                @endif


                <div class="card-body">

                    {{-- Icon --}}
                    @if($item->icon)
                        <img src="{{ asset('storage/'.$item->icon) }}"
                             alt="Icon"
                             width="45"
                             class="mb-3">
                    @endif

                    <h4 class="fw-bold">
                        {{ $item->nama }}
                    </h4>

                    {{-- Kategori --}}
                    @if($item->kategori)
                        <span class="badge bg-danger mb-3">
                            {{ $item->kategori }}
                        </span>
                    @endif

                    <p class="text-muted">
                        {{ $item->deskripsi }}
                    </p>

                    {{-- Durasi --}}
                    @if($item->durasi)
                        <p class="mb-2">
                            <strong>Durasi :</strong>
                            {{ $item->durasi }} Menit
                        </p>
                    @endif

                    <h5 class="text-danger fw-bold">
                        Rp {{ number_format($item->harga,0,',','.') }}
                    </h5>

                </div>

                <div class="card-footer bg-white border-0">

                    <a href="{{ route('detail.layanan', $item->id) }}"
                       class="btn btn-outline-danger w-100">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

        @empty

        <div class="col-12">
            <div class="alert alert-warning text-center">
                Belum ada layanan.
            </div>
        </div>

        @endforelse

    </div>

</div>

@endsection
```
