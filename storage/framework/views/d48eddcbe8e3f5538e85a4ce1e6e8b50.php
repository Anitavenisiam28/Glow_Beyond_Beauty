<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title','Glow Beyond Beauty'); ?></title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{

            font-family:'Poppins',sans-serif;
            background:#ffffff;
            overflow-x:hidden;

        }

        a{

            text-decoration:none;

        }

        /*=========================
            NAVBAR
        =========================*/

        .navbar{

            background:#fff;
            padding:18px 0;
            box-shadow:0 2px 15px rgba(0,0,0,.05);

        }

        .navbar-brand{

            font-family:'Playfair Display',serif;
            font-size:34px;
            font-weight:700;
            color:#222;

        }

        .navbar-brand span{

            color:#EB5B74;

        }

        .nav-link{

            color:#444;
            font-weight:500;
            margin:0 12px;
            transition:.3s;

        }

        .nav-link:hover{

            color:#EB5B74;

        }

        .btn-login{

            background:#EB5B74;
            color:#fff;
            border-radius:50px;
            padding:10px 35px;
            font-weight:600;
            transition:.3s;

        }

        .btn-login:hover{

            background:#d94862;
            color:white;

        }

        /*=========================
            FOOTER
        =========================*/

        footer{

            background:#222;
            color:#fff;
            padding:60px 0 25px;

        }

        footer h4{

            font-family:'Playfair Display',serif;

        }

        footer a{

            color:#fff;

        }

        footer a:hover{

            color:#EB5B74;

        }

        .copyright{

            border-top:1px solid rgba(255,255,255,.15);
            margin-top:40px;
            padding-top:20px;
            text-align:center;
            color:#bbb;

        }

    </style>

    <?php echo $__env->yieldPushContent('styles'); ?>

</head>
<body>

<!-- =========================
        NAVBAR
========================== -->

<nav class="navbar navbar-expand-lg">

    <div class="container">

        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <span>✦</span> Glow Beyond Beauty
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/')); ?>">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/layanan')); ?>">Layanan</a>
                </li>

              
                <li class="nav-item">
                    <a class="nav-link"href="<?php echo e(route('booking')); ?>" >Booking</a>
                </li>


 
                </li>

            </ul>

            <?php if(Auth::check()): ?>

                <div class="dropdown">

                    <button class="btn btn-login dropdown-toggle"
                            data-bs-toggle="dropdown">

                        <?php echo e(Auth::user()->name); ?>


                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li>

    

                        </li>

                        <li>

                            <form action="<?php echo e(route('logout')); ?>"
                                  method="POST">

                                <?php echo csrf_field(); ?>

                                <button class="dropdown-item">

                                    Logout

                                </button>

                            </form>

                        </li>

                    </ul>

                </div>

            <?php else: ?>

                <a href="<?php echo e(route('login')); ?>"
                   class="btn btn-outline-danger me-2">

                    Login

                </a>

                <a href="<?php echo e(route('register')); ?>"
                   class="btn btn-login">

                    Register

                </a>

            <?php endif; ?>

        </div>

    </div>

</nav>
<!-- =========================
        CONTENT
========================== -->

<main>

    <?php echo $__env->yieldContent('content'); ?>

</main>

<!-- =========================
        FOOTER
========================== -->

<footer>

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <h4>Glow Beyond Beauty</h4>

                <p>

                    Klinik kecantikan profesional dengan teknologi modern
                    dan tenaga ahli berpengalaman.

                </p>

            </div>

            <div class="col-lg-4">

                <h5>Menu</h5>

                <ul class="list-unstyled">

                    <li><a href="<?php echo e(route('home')); ?>">Home</a></li>

                    <li><a href="<?php echo e(route('layanan')); ?>">Layanan</a></li>

                    <li><a href="#">booking</a></li>

                </ul>

            </div>

            <div class="col-lg-4">

                <h5>Kontak</h5>

                <p>

                    <i class="bi bi-geo-alt"></i>
                    Yogyakarta

                </p>

                <p>

                    <i class="bi bi-envelope"></i>
                    glow@gmail.com

                </p>

                <p>

                    <i class="bi bi-telephone"></i>
                    0812-3456-7890

                </p>

            </div>

        </div>

        <div class="copyright">

            © <?php echo e(date('Y')); ?> Glow Beyond Beauty.
            All Rights Reserved.

        </div>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/layouts/app.blade.php ENDPATH**/ ?>