@extends('layouts.admin')

@section('content')

<style>
    body{
        background:#fdf6f7;
    }

    .card-custom{
        border:none;
        border-radius:20px;
        box-shadow:0 10px 30px rgba(0,0,0,0.05);
    }

    .header-title{
        font-weight:700;
        color:#333;
    }

    .btn-pink{
        background:#EB5B74;
        color:white;
        border-radius:30px;
        padding:6px 18px;
        border:none;
    }

    .btn-pink:hover{
        background:#d94c64;
        color:white;
    }

    .table thead{
        background:#fff0f3;
    }

    .table th{
        color:#555;
        font-weight:600;
    }

    .badge-menunggu{
        background:#ffe5e9;
        color:#EB5B74;
    }

    .badge-proses{
        background:#e3f2fd;
        color:#2196f3;
    }

    .badge-selesai{
        background:#e6f7ec;
        color:#28a745;
    }

    .badge-batal{
        background:#fdecea;
        color:#dc3545;
    }

</style>

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="header-title">Riwayat Booking</h3>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card card-custom">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>JK</th>
                            <th>Layanan</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                    @forelse($bookings as $booking)

                        <tr>

                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $booking->nama }}</td>
                            <td>{{ $booking->umur }}</td>
                            <td>{{ $booking->jenis_kelamin }}</td>
                            <td>{{ $booking->layanan }}</td>

                            <td>
                                {{ \Carbon\Carbon::parse($booking->tanggal)->format('d M Y') }}
                            </td>

                            <td>{{ $booking->jam }}</td>

                            <td>
                                @if($booking->status == 'Menunggu')
                                    <span class="badge badge-menunggu">Menunggu</span>

                                @elseif($booking->status == 'Diproses')
                                    <span class="badge badge-proses">Diproses</span>

                                @elseif($booking->status == 'Selesai')
                                    <span class="badge badge-selesai">Selesai</span>

                                @else
                                    <span class="badge badge-batal">Dibatalkan</span>
                                @endif
                            </td>

                            <td>

                                <a href="{{ route('admin.booking.edit',$booking->id) }}"
                                   class="btn btn-pink btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('admin.booking.destroy',$booking->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        onclick="return confirm('Yakin ingin menghapus booking ini?')"
                                        class="btn btn-outline-danger btn-sm">

                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="9" class="text-center text-muted">
                                Belum ada data booking.
                            </td>
                        </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection