```blade


<?php $__env->startSection('content'); ?>

<div class="container">

    <h3 class="mb-4">Edit Layanan</h3>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.layanan.update', $layanan->id)); ?>"
          method="POST"
          enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label class="form-label">Nama Layanan</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   value="<?php echo e(old('nama', $layanan->nama)); ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi"
                      class="form-control"
                      rows="4"
                      required><?php echo e(old('deskripsi', $layanan->deskripsi)); ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number"
                   name="harga"
                   class="form-control"
                   value="<?php echo e(old('harga', $layanan->harga)); ?>"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input type="text"
                   name="kategori"
                   class="form-control"
                   value="<?php echo e(old('kategori', $layanan->kategori)); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Durasi (Menit)</label>
            <input type="number"
                   name="durasi"
                   class="form-control"
                   value="<?php echo e(old('durasi', $layanan->durasi)); ?>">
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Saat Ini</label><br>

            <?php if($layanan->gambar): ?>
                <img src="<?php echo e(asset('storage/'.$layanan->gambar)); ?>"
                     class="img-thumbnail mb-2"
                     width="180">
            <?php else: ?>
                <p class="text-muted">Belum ada gambar.</p>
            <?php endif; ?>

            <input type="file"
                   name="gambar"
                   class="form-control"
                   accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Icon Saat Ini</label><br>

            <?php if($layanan->icon): ?>
                <img src="<?php echo e(asset('storage/'.$layanan->icon)); ?>"
                     class="img-thumbnail mb-2"
                     width="80">
            <?php else: ?>
                <p class="text-muted">Belum ada icon.</p>
            <?php endif; ?>

            <input type="file"
                   name="icon"
                   class="form-control"
                   accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="<?php echo e(route('admin.layanan.index')); ?>"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

<?php $__env->stopSection(); ?>
```

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/admin/layanan/edit.blade.php ENDPATH**/ ?>