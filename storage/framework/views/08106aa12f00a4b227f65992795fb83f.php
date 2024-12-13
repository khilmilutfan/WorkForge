<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tips loker</title>
    <style>
        .table-data {
            border-collapse: collapse;
            width: 100%;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 20px;
            text-align: center;
        }

        .table-data tr th {
            background-color: #2c3e50;
            color: white;
        }

        .table-data tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-data tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h3>Data Tips loker</h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>Nama </th>
                <th>Tips loker</th>
                <th>Posisi pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $tips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
            <td><?php echo e($tip->nama); ?></td>
                    <td><?php echo e($tip->tips_loker); ?></td>
                    <td><?php echo e($tip->done_work); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="7" align="center">Tidak ada data</td>
            </tr>
            <?php endif; ?>
        </tbody>
</body>

</html><?php /**PATH C:\laragon\www\WorkForge\resources\views/tips/print.blade.php ENDPATH**/ ?>