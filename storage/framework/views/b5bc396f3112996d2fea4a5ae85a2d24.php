

<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Layanan</h3>

        <a href="<?php echo e(route('admin.layanan.create')); ?>" class="btn btn-primary">
            + Tambah Layanan
        </a>
    </div>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="table-responsive">

        <table class="table table-bordered table-hover align-middle bg-white">

            <thead class="table-dark">
                <tr>
                    <th width="50">No</th>
                    <th>Gambar</th>
                    <th>Icon</th>
                    <th>Nama</th>
                    <th>Kategori</th>
                    <th>Durasi</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                <tr>

                    <td><?php echo e($i + 1); ?></td>

                    
                    <td>
                        <?php if($d->gambar): ?>
                            <img src="<?php echo e(asset('storage/'.$d->gambar)); ?>"
                                 width="80"
                                 class="img-thumbnail">
                        <?php else: ?>
                            <span class="text-muted">Tidak ada</span>
                        <?php endif; ?>
                    </td>

                    
                    <td>
                        <?php if($d->icon): ?>
                            <img src="<?php echo e(asset('storage/'.$d->icon)); ?>"
                                 width="40">
                        <?php else: ?>
                            <span class="text-muted">-</span>
                        <?php endif; ?>
                    </td>

                    <td><?php echo e($d->nama); ?></td>

                    <td><?php echo e($d->kategori); ?></td>

                    <td>
                        <?php echo e($d->durasi); ?>

                        <?php if($d->durasi): ?>
                            Menit
                        <?php endif; ?>
                    </td>

                    <td>
                        Rp <?php echo e(number_format($d->harga,0,',','.')); ?>

                    </td>

                    <td><?php echo e($d->deskripsi); ?></td>

                    <td>

                        <a href="<?php echo e(route('admin.layanan.edit',$d->id)); ?>"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="<?php echo e(route('admin.layanan.destroy',$d->id)); ?>"
                              method="POST"
                              style="display:inline;"
                              onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">

                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>

                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>

                        </form>

                    </td>

                </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                <tr>
                    <td colspan="9" class="text-center">
                        Belum ada data layanan.
                    </td>
                </tr>

            <?php endif; ?>

            </tbody>

        </table>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/admin/layanan/index.blade.php ENDPATH**/ ?>