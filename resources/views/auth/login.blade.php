@extends('layouts.app')

@section('title','Login')

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

    .btn-primary{
        background:#EB5B74;
        border:none;
        border-radius:30px;
        padding:10px;
        font-weight:600;
    }

    .btn-primary:hover{
        background:#d94c64;
    }
</style>
<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header text-center">
                    <h3>Login</h3>
                </div>

                <div class="card-body">

                    <form action="{{ route('login') }}" method="POST">

                        @csrf

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>

                        <button class="btn btn-primary w-100">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection