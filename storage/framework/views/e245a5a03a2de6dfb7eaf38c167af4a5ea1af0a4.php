
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Kode Pembelian</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
            <form action="<?php echo e(route('pembelian.kodePembelianStore')); ?>" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="kode_pembelian" class="control-label col-md-2 col-sm-3 col-xs-12">Buat Kode Pembelian</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <input type="text" class="form-control <?php $__errorArgs = ['kode_pembelian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kode_pembelian" name="kode_pembelian" required value="<?php echo e(old('kode_pembelian')); ?>" placeholder="Buat Kode Pembelian">
                        <?php $__errorArgs = ['kode_pembelian'];
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
                        <a type="button" href="<?php echo e(route('pembelian.index')); ?>" class="btn btn-primary">Batal</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pembelian/kodePembelian.blade.php ENDPATH**/ ?>