
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Edit Satuan</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
            <form action="<?php echo e(route('data-satuan.update', $satuan->id)); ?>" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
                <div class="form-group">
                    <label for="nama_satuan" class="control-label col-md-2 col-sm-3 col-xs-12">Nama Satuan</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <input type="text" class="form-control <?php $__errorArgs = ['nama_satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_satuan" name="nama_satuan" required value="<?php echo e(old('nama_satuan', $satuan->nama_satuan)); ?>" placeholder="Nama Satuan">
                        <?php $__errorArgs = ['nama_satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>   
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" id="submit" class="btn btn-success">Simpan</button>
                        <a type="button" href="<?php echo e(route('data-satuan.index')); ?>" class="btn btn-primary">Cancel</a>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/satuan/edit.blade.php ENDPATH**/ ?>