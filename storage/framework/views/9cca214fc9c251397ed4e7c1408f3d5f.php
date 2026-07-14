

<?php $__env->startSection('content'); ?>

<div class="container">

    <h3 class="mb-4">Ubah Status Booking</h3>

    <div class="card shadow-sm">

        <div class="card-body">

            <table class="table table-borderless">

                <tr>
                    <th width="180">Nama</th>
                    <td><?php echo e($booking->nama); ?></td>
                </tr>

                <tr>
                    <th>Umur</th>
                    <td><?php echo e($booking->umur); ?></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo e($booking->jenis_kelamin); ?></td>
                </tr>

                <tr>
                    <th>Layanan</th>
                    <td><?php echo e($booking->layanan); ?></td>
                </tr>

                <tr>
                    <th>Tanggal</th>
                    <td><?php echo e($booking->tanggal); ?></td>
                </tr>

                <tr>
                    <th>Jam</th>
                    <td><?php echo e($booking->jam); ?></td>
                </tr>

            </table>

            <hr>

            <form action="<?php echo e(route('admin.booking.update',$booking->id)); ?>"
                  method="POST">

                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="mb-3">

                    <label class="form-label fw-bold">
                        Status Booking
                    </label>

                    <select
                        name="status"
                        class="form-select">

                        <option value="Menunggu"
                            <?php echo e($booking->status=='Menunggu' ? 'selected' : ''); ?>>
                            Menunggu
                        </option>

                        <option value="Diproses"
                            <?php echo e($booking->status=='Diproses' ? 'selected' : ''); ?>>
                            Diproses
                        </option>

                        <option value="Selesai"
                            <?php echo e($booking->status=='Selesai' ? 'selected' : ''); ?>>
                            Selesai
                        </option>

                        <option value="Dibatalkan"
                            <?php echo e($booking->status=='Dibatalkan' ? 'selected' : ''); ?>>
                            Dibatalkan
                        </option>

                    </select>

                </div>

                <button class="btn btn-success">
                    Simpan Status
                </button>

                <a href="<?php echo e(route('admin.booking.index')); ?>"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/admin/booking/edit.blade.php ENDPATH**/ ?>