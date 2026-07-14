```blade


<?php $__env->startSection('content'); ?>

<div class="container">

    <h3 class="mb-4">Tambah Layanan</h3>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.layanan.store')); ?>"
          method="POST"
          enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label class="form-label">Nama Layanan</label>
            <input
                type="text"
                name="nama"
                class="form-control"
                value="<?php echo e(old('nama')); ?>"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea
                name="deskripsi"
                class="form-control"
                rows="4"
                required><?php echo e(old('deskripsi')); ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input
                type="number"
                name="harga"
                class="form-control"
                value="<?php echo e(old('harga')); ?>"
                required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <input
                type="text"
                name="kategori"
                class="form-control"
                value="<?php echo e(old('kategori')); ?>"
                placeholder="Contoh: Facial, Hair Treatment, Spa">
        </div>

        <div class="mb-3">
            <label class="form-label">Durasi (Menit)</label>
            <input
                type="number"
                name="durasi"
                class="form-control"
                value="<?php echo e(old('durasi')); ?>"
                placeholder="60">
        </div>

        <div class="mb-3">
            <label class="form-label">Gambar Layanan</label>
            <input
                type="file"
                name="gambar"
                class="form-control"
                accept="image/*">
        </div>

        <div class="mb-3">
            <label class="form-label">Icon Layanan</label>
            <input
                type="file"
                name="icon"
                class="form-control"
                accept="image/*">
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="<?php echo e(route('admin.layanan.index')); ?>"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

<?php $__env->stopSection(); ?>
```

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\XAMPP1\htdocs\glow-beyond-beauty\resources\views/admin/layanan/create.blade.php ENDPATH**/ ?>