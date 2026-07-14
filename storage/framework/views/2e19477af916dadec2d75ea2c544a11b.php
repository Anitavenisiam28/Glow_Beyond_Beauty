

<?php $__env->startSection('content'); ?>



<div class="container-fluid">

    
    <div class="mb-4">
        <h2 class="fw-bold">Dashboard Admin</h2>
        <p class="text-muted">
            Selamat datang di Dashboard <strong>Glow Beyond Beauty</strong>.
        </p>
    </div>

    
    <div class="row g-4">

        
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <small class="text-muted">
                                Total Treatment
                            </small>

                            <h2 class="fw-bold mt-2">
                                <?php echo e(\App\Models\Layanan::count()); ?>

                            </h2>
                        </div>

                        <div class="fs-1 text-primary">
                            <i class="bi bi-stars"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <small class="text-muted">
                                Total Booking
                            </small>

                            <h2 class="fw-bold mt-2">
                                <?php echo e(\App\Models\Booking::count()); ?>

                            </h2>
                        </div>

                        <div class="fs-1 text-success">
                            <i class="bi bi-calendar-check-fill"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <small class="text-muted">
                                Booking Menunggu
                            </small>

                            <h2 class="fw-bold mt-2">
                                <?php echo e(\App\Models\Booking::where('status','Menunggu')->count()); ?>

                            </h2>
                        </div>

                        <div class="fs-1 text-warning">
                            <i class="bi bi-hourglass-split"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <small class="text-muted">
                                Booking Diproses
                            </small>

                            <h2 class="fw-bold mt-2">
                                <?php echo e(\App\Models\Booking::where('status','Diproses')->count()); ?>

                            </h2>
                        </div>

                        <div class="fs-1 text-info">
                            <i class="bi bi-arrow-repeat"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <small class="text-muted">
                                Booking Selesai
                            </small>

                            <h2 class="fw-bold mt-2">
                                <?php echo e(\App\Models\Booking::where('status','Selesai')->count()); ?>

                            </h2>
                        </div>

                        <div class="fs-1 text-success">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-lg-4 col-md-6">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">

                        <div>
                            <small class="text-muted">
                                Booking Dibatalkan
                            </small>

                            <h2 class="fw-bold mt-2">
                                <?php echo e(\App\Models\Booking::where('status','Dibatalkan')->count()); ?>

                            </h2>
                        </div>

                        <div class="fs-1 text-danger">
                            <i class="bi bi-x-circle-fill"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <div class="card border-0 shadow-sm rounded-4 mt-5">

        <div class="card-header bg-white">

            <h5 class="mb-0">
                Booking Hari Ini
            </h5>

        </div>

        <div class="card-body">

            <?php
                $hariIni = \App\Models\Booking::whereDate('tanggal', now())->latest()->get();
            ?>

            <?php if($hariIni->count()): ?>

                <div class="table-responsive">

                    <table class="table table-hover align-middle">

                        <thead class="table-light">

                            <tr>

                                <th>Nama</th>
                                <th>Treatment</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Status</th>

                            </tr>

                        </thead>

                        <tbody>

                        <?php $__currentLoopData = $hariIni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>

                                <td><?php echo e($booking->nama); ?></td>

                                <td><?php echo e($booking->layanan); ?></td>

                                <td><?php echo e($booking->tanggal); ?></td>

                                <td><?php echo e($booking->jam); ?></td>

                                <td>

                                    <?php switch($booking->status):

                                        case ('Menunggu'): ?>
                                            <span class="badge bg-warning text-dark">
                                                Menunggu
                                            </span>
                                            <?php break; ?>

                                        <?php case ('Diproses'): ?>
                                            <span class="badge bg-info">
                                                Diproses
                                            </span>
                                            <?php break; ?>

                                        <?php case ('Selesai'): ?>
                                            <span class="badge bg-success">
                                                Selesai
                                            </span>
                                            <?php break; ?>

                                        <?php case ('Dibatalkan'): ?>
                                            <span class="badge bg-danger">
                                                Dibatalkan
                                            </span>
                                            <?php break; ?>

                                        <?php default: ?>
                                            <span class="badge bg-secondary">
                                                -
                                            </span>

                                    <?php endswitch; ?>

                                </td>

                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>

                    </table>

                </div>

            <?php else: ?>

                <div class="alert alert-info mb-0">

                    Belum ada booking untuk hari ini.

                </div>

            <?php endif; ?>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>