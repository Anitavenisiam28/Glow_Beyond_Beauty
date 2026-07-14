@extends('layouts.app')

@section('title','Booking')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header text-center">
                    <h3>Form Booking</h3>
                </div>

                <div class="card-body">

                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Umur</label>
                            <input type="number" name="umur" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Pilih Layanan</label>
                            <select name="layanan" class="form-control">
                                @foreach($layanans as $l)
                                    <option value="{{ $l->nama }}">{{ $l->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Jam</label>
                            <input type="time" name="jam" class="form-control" required>
                        </div>

                        <button class="btn btn-danger w-100">
                            Booking Sekarang
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection 