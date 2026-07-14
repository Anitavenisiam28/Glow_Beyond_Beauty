@extends('layouts.admin')

@section('content')

<div class="container">

    <h3 class="mb-4">Ubah Status Booking</h3>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-borderless">

                <tr>
                    <th width="180">Nama</th>
                    <td>{{ $booking->nama }}</td>
                </tr>

                <tr>
                    <th>Umur</th>
                    <td>{{ $booking->umur }}</td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $booking->jenis_kelamin }}</td>
                </tr>

                <tr>
                    <th>Layanan</th>
                    <td>{{ $booking->layanan }}</td>
                </tr>

                <tr>
                    <th>Tanggal</th>
                    <td>{{ $booking->tanggal }}</td>
                </tr>

                <tr>
                    <th>Jam</th>
                    <td>{{ $booking->jam }}</td>
                </tr>

            </table>

            <hr>

            <form action="{{ route('admin.booking.update',$booking->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Status Booking
                    </label>

                    <select
                        name="status"
                        class="form-select">

                        <option value="Menunggu"
                            {{ $booking->status=='Menunggu' ? 'selected' : '' }}>
                            Menunggu
                        </option>

                        <option value="Diproses"
                            {{ $booking->status=='Diproses' ? 'selected' : '' }}>
                            Diproses
                        </option>

                        <option value="Selesai"
                            {{ $booking->status=='Selesai' ? 'selected' : '' }}>
                            Selesai
                        </option>

                        <option value="Dibatalkan"
                            {{ $booking->status=='Dibatalkan' ? 'selected' : '' }}>
                            Dibatalkan
                        </option>

                    </select>

                </div>

                <button class="btn btn-success">
                    Simpan Status
                </button>

                <a href="{{ route('admin.booking.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection

