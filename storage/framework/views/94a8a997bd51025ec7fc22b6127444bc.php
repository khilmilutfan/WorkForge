<?php $__env->startSection('content'); ?>
<div>
    <form action="<?php echo e(route('tips.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="input" required>
        </div>
        <div class="mb-3">
            <label for="tips_loker" class="form-label">Tips Loker</label>
            <textarea name="tips_loker" id="tips_loker" class="input" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="done_work" class="form-label">Posisi Pekerjaan</label>
            <textarea name="done_work" id="done_work" class="input" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" name="foto" id="foto" class="input">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\WorkForge\resources\views/tips/create.blade.php ENDPATH**/ ?>