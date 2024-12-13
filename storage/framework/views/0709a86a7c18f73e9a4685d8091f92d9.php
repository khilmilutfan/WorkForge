<?php $__env->startSection('content'); ?>
<div>
    <a href="<?php echo e(route('tips.create')); ?>" class="btn btn-primary">Tambah Tips</a>
    <a href="<?php echo e(route('tips.print')); ?>" class="btn btn-tambah">Cetak PDF</a>
    <table style="margin-top: 20px;" class="table-data">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nama</th>
                <th>Tips Loker</th>
                <th>Posisi Pekerjaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php if($tip->foto && file_exists(public_path('storage/' . $tip->foto))): ?>
                            <img src="<?php echo e(asset('storage/' . $tip->foto)); ?>" alt="Foto" style="width: 100px; height: auto;">
                        <?php else: ?>
                            <p>Tidak ada foto</p>
                        <?php endif; ?>
                    </td>
                    <td><?php echo e($tip->nama); ?></td>
                    <td><?php echo e($tip->tips_loker); ?></td>
                    <td><?php echo e($tip->done_work); ?></td>
                    <td>
                        <a href="<?php echo e(route('tips.edit', $tip->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('tips.destroy', $tip->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\WorkForge\resources\views/tips/index.blade.php ENDPATH**/ ?>