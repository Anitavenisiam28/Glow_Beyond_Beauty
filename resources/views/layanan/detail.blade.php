```blade
@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                {{-- Gambar Layanan --}}
                @if($data->gambar)
                    <img src="{{ asset('storage/'.$data->gambar) }}"
                         class="card-img-top"
                         alt="{{ $data->nama }}"
                         style="height:400px; object-fit:cover;">
                @else
                    <div class="bg-light text-center py-5">
                        <p class="text-muted mb-0">Tidak ada gambar.</p>
                    </div>
                @endif

                <div class="card-body p-5">

                    {{-- Icon --}}
                    @if($data->icon)
                        <div class="text-center mb-4">
                            <img src="{{ asset('storage/'.$data->icon) }}"
                                 alt="Icon"
                                 width="70">
                        </div>
                    @endif

                    {{-- Nama --}}
                    <h2 class="text-center fw-bold mb-3">
                        {{ $data->nama }}
                    </h2>

                    {{-- Kategori --}}
                    @if($data->kategori)
                        <div class="text-center mb-3">
                            <span class="badge bg-danger fs-6 px-3 py-2">
                                {{ $data->kategori }}
                            </span>
                        </div>
                    @endif

                    <hr>

                    {{-- Deskripsi --}}
                    <div class="mb-4">
                        <h5>Deskripsi</h5>
                        <p class="text-muted">
                            {{ $data->deskripsi }}
                        </p>
                    </div>

                    {{-- Informasi --}}
                    <div class="row text-center">

                        <div class="col-md-6 mb-3">
                            <div class="border rounded-3 p-3 h-100">
                                <h6 class="text-muted mb-2">
                                    Durasi
                                </h6>

                                <h5 class="fw-bold">
                                    {{ $data->durasi ?? '-' }}
                                    @if($data->durasi)
                                        Menit
                                    @endif
                                </h5>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="border rounded-3 p-3 h-100">
                                <h6 class="text-muted mb-2">
                                    Harga
                                </h6>

                                <h5 class="fw-bold text-danger">
                                    Rp {{ number_format($data->harga,0,',','.') }}
                                </h5>
                            </div>
                        </div>

                    </div>

                    <div class="text-center mt-4">

                        <a href="{{ route('layanan') }}"
                           class="btn btn-secondary">
                            ← Kembali ke Daftar Layanan
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
```
