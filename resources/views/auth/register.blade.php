@extends('layouts.app')

@section('title','Register')

@section('content')

<style>
    body{
        background:#fdf6f7;
    }

    .card{
        border:none;
        border-radius:20px;
        box-shadow:0 10px 30px rgba(0,0,0,0.08);
    }

    .card-header{
        background:white;
        border-bottom:none;
    }

    .card-header h3{
        font-family:'Playfair Display', serif;
        font-weight:700;
        color:#333;
    }

    label{
        font-weight:500;
        color:#555;
    }

    .form-control{
        border-radius:12px;
        padding:10px 14px;
        border:1px solid #eee;
    }

    .form-control:focus{
        border-color:#EB5B74;
        box-shadow:0 0 0 0.2rem rgba(235,91,116,0.15);
    }

    .btn-success{
        background:#EB5B74;
        border:none;
        border-radius:30px;
        padding:10px;
        font-weight:600;
    }

    .btn-success:hover{
        background:#d94c64;
    }

    a{
        color:#EB5B74;
        font-weight:500;
    }

    a:hover{
        color:#d94c64;
    }
</style>
<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card shadow border-0 rounded-4">

                <div class="card-header text-center bg-white border-0">
                    <h3 class="fw-bold">Register</h3>
                </div>

                <div class="card-body px-4">

                    {{-- 🔥 ERROR MESSAGE --}}
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('register') }}" method="POST">
                        @csrf

                        {{-- NAMA --}}
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text"
                                   name="name"
                                   value="{{ old('name') }}"
                                   class="form-control @error('name') is-invalid @enderror"
                                   required>

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- EMAIL --}}
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   class="form-control @error('email') is-invalid @enderror"
                                   required>

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- PASSWORD --}}
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password"
                                   name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   required>

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- KONFIRMASI PASSWORD --}}
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password</label>
                            <input type="password"
                                   name="password_confirmation"
                                   class="form-control"
                                   required>
                        </div>

                        {{-- BUTTON --}}
                        <button class="btn btn-success w-100">
                            Register
                        </button>

                    </form>

                    {{-- LINK LOGIN --}}
                    <div class="text-center mt-3">
                        <small>
                            Sudah punya akun?
                            <a href="{{ route('login') }}">Login di sini</a>
                        </small>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection