
<?php $__env->startSection('content'); ?>
    
ini halaman edit

<br> <br>

<form action="<?php echo e(route('coba.update', $coba->id)); ?>" method="post">
<?php echo csrf_field(); ?> 
<?php echo method_field('PUT'); ?>
    <label for="buat_nama">Buat Nama</label>
    <input type="text" id="buat_nama" name="buat_nama" class="form-control" 
    value="<?php echo e(old('buat_nama', $coba->buat_nama)); ?>" placeholder="Buat Nama">
    <br>
    <button type="submit" class="btn btn-success" >Simpan</button>
    <a href="<?php echo e(route('coba.index')); ?>" class="btn btn-primary">Batal</a>
</form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/coba/edit.blade.php ENDPATH**/ ?>