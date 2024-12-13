<?php $__env->startSection('content'); ?>

<div>
    <a href="<?php echo e(route('lowongan.create')); ?>" class="btn btn-tambah">Tambah Lowongan</a>
    <a href="<?php echo e(route('lowongan.print')); ?>" class="btn btn-tambah">Cetak PDF</a>
    <table style="margin-top: 20px;" class="table-data">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama Perusahaan</th>
                <th>Posisi</th>
                <th>Gaji</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $lowongans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lowongan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                    <?php if($lowongan->foto && file_exists(public_path('storage/' . $lowongan->foto))): ?>
                            <img src="<?php echo e(asset('storage/' . $lowongan->foto)); ?>" alt="Foto" style="width: 100px; height: auto;">
                        <?php else: ?>
                            <p>Tidak ada foto</p>
                        <?php endif; ?>
                 </td>
                    <td><?php echo e($lowongan->nama_perusahaan); ?></td>
                    <td><?php echo e($lowongan->posisi); ?></td>
                    <td><?php echo e($lowongan->gaji_minimal); ?> - <?php echo e($lowongan->gaji_maksimal); ?></td>
                    <td><?php echo e($lowongan->lokasi); ?></td>
                    <td>
                        <a href="<?php echo e(route('lowongan.edit', $lowongan->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('lowongan.destroy', $lowongan->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\WorkForge\resources\views/lowongan/index.blade.php ENDPATH**/ ?>