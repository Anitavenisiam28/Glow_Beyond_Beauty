


<?php $__env->startSection('content'); ?>

<div class="container mt-5">

    <div class="text-center mb-5">
        <h2 class="fw-bold">LAYANAN KAMI</h2>
        <h4 class="mt-3">Treatment Unggulan Untuk Kulit Anda</h4>
        <p class="text-muted">
            Setiap perawatan dirancang khusus oleh tim ahli kecantikan kami.
        </p>
    </div>

    <div class="row">

        <?php $__empty_1 = true; $__currentLoopData = $layanans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <div class="col-lg-4 col-md-6 mb-4">

            <div class="card h-100 shadow border-0">

                
                <?php if($item->gambar): ?>
                    <img src="<?php echo e(asset('storage/'.$item->gambar)); ?>"
                         class="card-img-top"
                         alt="<?php echo e($item->nama); ?>"
                         style="height:220px; object-fit:cover;">
                <?php else: ?>
                    <div class="text-center py-5 bg-light">
                        Tidak ada gambar
                    </div>
                <?php endif; ?>


                <div class="card-body">

                    
                    <?php if($item->icon): ?>
                        <img src="<?php echo e(asset('storage/'.$item->icon)); ?>"
                             alt="Icon"
                             width="45"
                             class="mb-3">
                    <?php endif; ?>

                    <h4 class="fw-bold">
                        <?php echo e($item->nama); ?>

                    </h4>

                    
                    <?php if($item->kategori): ?>
                        <span class="badge bg-danger mb-3">
                            <?php echo e($item->kategori); ?>

                        </span>
                    <?php endif; ?>

                    <p class="text-muted">
                        <?php echo e($item->deskripsi); ?>

                    </p>

                    
                    <?php if($item->durasi): ?>
                        <p class="mb-2">
                            <strong>Durasi :</strong>
                            <?php echo e($item->durasi); ?> Menit
                        </p>
                    <?php endif; ?>

                    <h5 class="text-danger fw-bold">
                        Rp <?php echo e(number_format($item->harga,0,',','.')); ?>

                    </h5>

                </div>

                <div class="card-footer bg-white border-0">

                    <a href="<?php echo e(route('detail.layanan', $item->id)); ?>"
                       class="btn btn-outline-danger w-100">
                        Lihat Detail
                    </a>

                </div>

            </div>

        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

        <div class="col-12">
            <div class="alert alert-warning text-center">
                Belum ada layanan.
            </div>
        </div>

        <?php endif; ?>

    </div>

</div>

<?php $__env->stopSection(); ?>
```

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/layanan/index.blade.php ENDPATH**/ ?>