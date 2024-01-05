
<?php $__env->startSection('content'); ?>


<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade modal-style" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Bayar Sekarang</h4>
        </div>
        <div class="modal-body">
            
            <form action="<?php echo e(route('penjualan.detailTransaksiPenjualan')); ?>" method="POST" class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <div class="col-md-10 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="id_kodePenjualan" name="id_kodePenjualan" required readonly value="" placeholder="Masukan Kode Penjualan">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="harga_total" class="control-label col-md-2 col-sm-3 col-xs-12">Harga Total</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" class="form-control <?php $__errorArgs = ['harga_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="harga_total" name="harga_total" required value="" placeholder="Harga Total">
                            <?php $__errorArgs = ['harga_total'];
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
                    <div class="form-group">
                        <label for="dibayar" class="control-label col-md-2 col-sm-3 col-xs-12">Di Bayar</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" class="form-control <?php $__errorArgs = ['dibayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="dibayar" name="dibayar" required value="" placeholder="Dibayar">
                            <?php $__errorArgs = ['dibayar'];
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
                    <div class="form-group">
                        <label for="kekurangan" class="control-label col-md-2 col-sm-3 col-xs-12">Kekurangan</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" class="form-control <?php $__errorArgs = ['kekurangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kekurangan" name="kekurangan" required value="" placeholder="Kekurangan">
                            <?php $__errorArgs = ['kekurangan'];
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
                    <div class="form-group">
                        <div class="col-md-10 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" id="status" name="status" required readonly value="" placeholder="Status" style="margin: 0 10px;">
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
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/piutang/modal.blade.php ENDPATH**/ ?>