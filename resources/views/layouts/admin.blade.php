<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Glow Beyond Beauty - Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
          rel="stylesheet">

<style>

    body{
        margin:0;
        background:#fdf6f7;
        font-family:'Poppins', sans-serif;
    }

    .wrapper{
        display:flex;
    }

    /* ======================
       SIDEBAR (SOFT PINK)
    ======================= */

    .sidebar{

        width:250px;
        min-height:100vh;

        background:#ffffff;

        border-right:1px solid #f1d6db;

        position:fixed;

        left:0;
        top:0;

        padding:25px;

    }

    .sidebar h3{

        text-align:center;
        margin-bottom:35px;

        font-weight:700;
        font-family:'Playfair Display', serif;

        color:#333;
    }

    .sidebar a{

        display:block;

        padding:12px 15px;

        margin-bottom:10px;

        color:#555;

        text-decoration:none;

        border-radius:12px;

        transition:.3s;

        font-weight:500;

    }

    .sidebar a:hover{

        background:#ffe5e9;

        color:#EB5B74;

        transform:translateX(5px);

    }

    .sidebar i{

        margin-right:10px;
    }

    .logout{

        margin-top:40px;
    }

    .logout button{

        background:#EB5B74;
        border:none;
        border-radius:30px;
    }

    .logout button:hover{
        background:#d94c64;
    }

    /* ======================
       CONTENT
    ======================= */

    .content{

        margin-left:250px;

        width:100%;

        padding:35px;

    }

    .navbar-admin{

        background:white;

        border-radius:20px;

        padding:18px 25px;

        margin-bottom:25px;

        box-shadow:0 10px 25px rgba(0,0,0,.05);

    }

</style>

</head>

<body>

<div class="wrapper">

    <!-- Sidebar -->
    <div class="sidebar">

        <h3>Glow Beauty</h3>

        <a href="{{ route('admin.dashboard') }}">
            <i class="bi bi-speedometer2"></i>
            Dashboard
        </a>

        <a href="{{ route('admin.layanan.index') }}">
            <i class="bi bi-scissors"></i>
            Data Layanan
        </a>

        <a href="{{ route('admin.booking.index') }}">
            <i class="bi bi-calendar-check"></i>
            Riwayat Booking
        </a>

        <div class="logout">

            <form action="{{ route('admin.logout') }}"
                  method="POST">

                @csrf

                <button class="btn btn-danger w-100">

                    <i class="bi bi-box-arrow-right"></i>

                    Logout

                </button>

            </form>

        </div>

    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')

    </div>

</div>

</body>

</html>

