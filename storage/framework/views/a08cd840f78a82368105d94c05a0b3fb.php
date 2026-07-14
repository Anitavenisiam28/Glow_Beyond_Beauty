```blade


<?php $__env->startSection('content'); ?>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

                
                <?php if($data->gambar): ?>
                    <img src="<?php echo e(asset('storage/'.$data->gambar)); ?>"
                         class="card-img-top"
                         alt="<?php echo e($data->nama); ?>"
                         style="height:400px; object-fit:cover;">
                <?php else: ?>
                    <div class="bg-light text-center py-5">
                        <p class="text-muted mb-0">Tidak ada gambar.</p>
                    </div>
                <?php endif; ?>

                <div class="card-body p-5">

                    
                    <?php if($data->icon): ?>
                        <div class="text-center mb-4">
                            <img src="<?php echo e(asset('storage/'.$data->icon)); ?>"
                                 alt="Icon"
                                 width="70">
                        </div>
                    <?php endif; ?>

                    
                    <h2 class="text-center fw-bold mb-3">
                        <?php echo e($data->nama); ?>

                    </h2>

                    
                    <?php if($data->kategori): ?>
                        <div class="text-center mb-3">
                            <span class="badge bg-danger fs-6 px-3 py-2">
                                <?php echo e($data->kategori); ?>

                            </span>
                        </div>
                    <?php endif; ?>

                    <hr>

                    
                    <div class="mb-4">
                        <h5>Deskripsi</h5>
                        <p class="text-muted">
                            <?php echo e($data->deskripsi); ?>

                        </p>
                    </div>

                    
                    <div class="row text-center">

                        <div class="col-md-6 mb-3">
                            <div class="border rounded-3 p-3 h-100">
                                <h6 class="text-muted mb-2">
                                    Durasi
                                </h6>

                                <h5 class="fw-bold">
                                    <?php echo e($data->durasi ?? '-'); ?>

                                    <?php if($data->durasi): ?>
                                        Menit
                                    <?php endif; ?>
                                </h5>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="border rounded-3 p-3 h-100">
                                <h6 class="text-muted mb-2">
                                    Harga
                                </h6>

                                <h5 class="fw-bold text-danger">
                                    Rp <?php echo e(number_format($data->harga,0,',','.')); ?>

                                </h5>
                            </div>
                        </div>

                    </div>

                    <div class="text-center mt-4">

                        <a href="<?php echo e(route('layanan')); ?>"
                           class="btn btn-secondary">
                            ← Kembali ke Daftar Layanan
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
```

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/layanan/detail.blade.php ENDPATH**/ ?>