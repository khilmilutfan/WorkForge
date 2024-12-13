<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('lowongan.store')); ?>"  enctype = "multipart/form-data" method="POST">
    <?php echo csrf_field(); ?>
    <div>
        <label>Nama Perusahaan:</label>
        <input type="text" class="input" name="nama_perusahaan" required>
    </div>
    <div>
        <label>Posisi:</label>
        <input type="text"class="input" name="posisi" required>
    </div>
    <div>
        <label>Gaji Minimal:</label>
        <input type="number" class="input" name="gaji_minimal" required>
    </div>
    <div>
        <label>Gaji Maksimal:</label>
        <input type="number" class="input" name="gaji_maksimal" required>
    </div>
    <div>
        <label>Lokasi:</label>
        <input type="text" class="input" name="lokasi" required>
    </div>
    <div>
        <label>Foto:</label>
        <input type="file" class="input" name="foto" required>
    </div>
    <div>
        <label>Tipe Pekerjaan:</label>
        <input type="text" class="input" name="tipe_pekerjaan" required>
    </div>
    <div>
        <label>Deskripsi:</label>
        <textarea name="deskripsi" class="input" required></textarea>
    </div>
    <button class="btn btn-simpan"type="submit">Simpan</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\WorkForge\resources\views/lowongan/create.blade.php ENDPATH**/ ?>