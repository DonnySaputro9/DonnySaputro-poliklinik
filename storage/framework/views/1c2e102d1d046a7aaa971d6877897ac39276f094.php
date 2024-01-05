
<?php $__env->startSection('content'); ?>

<a href="<?php echo e(route('coba.create')); ?>" class="btn btn-primary">Create</a>
    
<br> <br>

ini halaman coba

<br> <br>

<table class="table table-striped">
    <thead>
        <tr>
            <td><strong>No.</strong></td>
            <td><strong>Nama</strong></td>
            <td><strong>Aksi</strong></td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $coba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($c->buat_nama); ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('coba.edit', $c->id)); ?>">Edit</a>
                    <form action="<?php echo e(route('coba.destroy', $c->id)); ?>" method="POST" style="display: inline;"> 
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('delete'); ?>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/coba/index.blade.php ENDPATH**/ ?>