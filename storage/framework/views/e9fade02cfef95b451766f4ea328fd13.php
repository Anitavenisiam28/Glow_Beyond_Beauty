

<?php $__env->startSection('content'); ?>

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

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

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

                    <?php $__empty_1 = true; $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                        <tr>

                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($booking->nama); ?></td>
                            <td><?php echo e($booking->umur); ?></td>
                            <td><?php echo e($booking->jenis_kelamin); ?></td>
                            <td><?php echo e($booking->layanan); ?></td>

                            <td>
                                <?php echo e(\Carbon\Carbon::parse($booking->tanggal)->format('d M Y')); ?>

                            </td>

                            <td><?php echo e($booking->jam); ?></td>

                            <td>
                                <?php if($booking->status == 'Menunggu'): ?>
                                    <span class="badge badge-menunggu">Menunggu</span>

                                <?php elseif($booking->status == 'Diproses'): ?>
                                    <span class="badge badge-proses">Diproses</span>

                                <?php elseif($booking->status == 'Selesai'): ?>
                                    <span class="badge badge-selesai">Selesai</span>

                                <?php else: ?>
                                    <span class="badge badge-batal">Dibatalkan</span>
                                <?php endif; ?>
                            </td>

                            <td>

                                <a href="<?php echo e(route('admin.booking.edit',$booking->id)); ?>"
                                   class="btn btn-pink btn-sm">
                                    Edit
                                </a>

                                <form action="<?php echo e(route('admin.booking.destroy',$booking->id)); ?>"
                                      method="POST"
                                      class="d-inline">

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button
                                        onclick="return confirm('Yakin ingin menghapus booking ini?')"
                                        class="btn btn-outline-danger btn-sm">

                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                        <tr>
                            <td colspan="9" class="text-center text-muted">
                                Belum ada data booking.
                            </td>
                        </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/admin/booking/index.blade.php ENDPATH**/ ?>