<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('lowongan.update', $lowongan->id)); ?>" enctype="multipart/form-data" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div>
        <label>Nama Perusahaan:</label>
        <input type="text" class="input" name="nama_perusahaan" value="<?php echo e($lowongan->nama_perusahaan); ?>" required>
    </div>
    <div>
        <label>Posisi:</label>
        <input type="text" class="input" name="posisi" value="<?php echo e($lowongan->posisi); ?>" required>
    </div>
    <div>
        <label>Gaji Minimal:</label>
        <input type="number" class="input" name="gaji_minimal" value="<?php echo e($lowongan->gaji_minimal); ?>" required>
    </div>
    <div>
        <label>Gaji Maksimal:</label>
        <input type="number" class="input" name="gaji_maksimal" value="<?php echo e($lowongan->gaji_maksimal); ?>" required>
    </div>
    <div>
        <label>Lokasi:</label>
        <input type="text" class="input" name="lokasi" value="<?php echo e($lowongan->lokasi); ?>" required>
    </div>
    <div>
        <label>Foto:</label>
        <input type="file" class="input" name="foto" value="<?php echo e($lowongan->foto); ?>" required>
    </div>
    <div>
        <label>Tipe Pekerjaan:</label>
        <input type="text" class="input" name="tipe_pekerjaan" value="<?php echo e($lowongan->tipe_pekerjaan); ?>" required>
    </div>
    <div>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" class="input" required><?php echo e($lowongan->deskripsi); ?></textarea>
    </div>
    <button type="submit" class="btn btn-simpan">Perbarui</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\WorkForge\resources\views/lowongan/edit.blade.php ENDPATH**/ ?>