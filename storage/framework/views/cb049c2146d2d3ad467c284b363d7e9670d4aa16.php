
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Form Pengiriman Barang</h2>
            <div class="clearfix"></div>
        </div> 
        <div class="x_content">

            <form action="<?php echo e(route('pengiriman.store')); ?>" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="tanggal" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Tanggal</label>
                    <div class="col-md-10 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <input type="date" class="form-control <?php $__errorArgs = ['nama_satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tanggal" name="tanggal" value="<?php echo e(old('tanggal')); ?>">
                        <?php $__errorArgs = ['tanggal'];
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
                    <label for="petugas" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Nama Petugas</label>
                    <div class="col-md-10 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <input type="text" class="form-control" id="petugas" name="petugas" value="<?php echo e(old('petugas')); ?>" placeholder="Nama Petugas">
                        <?php $__errorArgs = ['petugas'];
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
                    <label for="id_penjualan" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Kode penjualan</label>
                    <div class="col-md-10 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <select class="form-control <?php $__errorArgs = ['id_penjualan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id_penjualan" name="id_penjualan" required>
                            <option selected disabled>Pilih Kode Penjualan</option>
                            <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($kode->jenis == 'grosir'): ?>
                                    <option value="<?php echo e($kode->id); ?>"><?php echo e($kode->kodePenjualan); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['id_penjualan'];
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
                    <label for="pelanggan" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Pelanggan</label>
                    <div class="col-md-10 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <input type="text" class="form-control" id="pelanggan" value="" placeholder="Nama Pelanggan">
                        <?php $__errorArgs = ['pelanggan'];
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
                    <label for="alamat" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Alamat</label>
                    <div class="col-md-10 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <textarea class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="alamat" required rows="5" placeholder='Alamat'></textarea>
                        <?php $__errorArgs = ['alamat'];
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
                    <label for="no_telepon" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">No.Telepon</label>
                    <div class="col-md-10 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <input type="text" class="form-control" id="no_telepon" value="" placeholder="No. Telepon">
                        <?php $__errorArgs = ['no_telepon'];
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
                    <div class="col-md-10 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <input type="hidden" class="form-control" id="status" name="status" value="Dikirim">
                    </div>
                </div>

                <div class="ln_solid"></div>

                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" id="submit" class="btn btn-success">Simpan</button>
                        <a type="button" href="<?php echo e(route('pengiriman.index')); ?>" class="btn btn-primary">Batal</a>
                    </div>
                </div>
            </form>

        </div> 
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function() { 
            
            // console.log(url);
            $('#id_penjualan').change(function(){
                var id = $(this).val();
                var url = "<?php echo e(route('json.penjualan', ':id')); ?>";
                url=url.replace(':id',id); 

                $.get( url, function( data ) {
                    $('#pelanggan').val(data.pelanggan.nama_pelanggan); 
                    $('#alamat').val(data.pelanggan.alamat); 
                    $('#no_telepon').val(data.pelanggan.no_telepon);
                });
            })
            
        });

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pengiriman/create.blade.php ENDPATH**/ ?>