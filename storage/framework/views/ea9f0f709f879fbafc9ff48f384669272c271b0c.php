
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Form Transaksi Pembelian</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

        
        <?php
            $kodePembelian = 1;
        ?>

            <form action="<?php echo e(route('pembelian.store')); ?>" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
                <div class="form-group"> 
                    <label for="kodePembelian" class="control-label col-md-2 col-sm-3 col-xs-12">Kode Pembelian</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <?php if($pembelian == null): ?>
                            <input type="text" class="form-control <?php $__errorArgs = ['kodePembelian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kodePembelian" name="kodePembelian" required readonly value="<?php echo e($kodePembelian++); ?>" placeholder="Kode Pembelian">
                        <?php elseif($pembelian !== null): ?>
                            <input type="text" class="form-control <?php $__errorArgs = ['kodePembelian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kodePembelian" name="kodePembelian" required readonly value="<?php echo e($pembelian->id + 1); ?>" placeholder="Kode Pembelian">
                        <?php endif; ?>
                        <?php $__errorArgs = ['kodePembelian'];
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
                    <label for="tanggal" class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <input type="date" class="form-control <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="tanggal" name="tanggal" required value="<?php echo e(old('tanggal')); ?>" placeholder="Tanggal">
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
                    <label for="id_suplier" class="control-label col-md-2 col-sm-3 col-xs-12">Suplier</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <select class="form-control <?php $__errorArgs = ['id_suplier'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id_suplier" name="id_suplier" required>
                            <option selected disabled>Pilih Suplier</option>
                            <?php $__currentLoopData = $suplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($s->id); ?>"><?php echo e($s->nama_suplier); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['id_suplier'];
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
                    <label for="id_barang" class="control-label col-md-2 col-sm-3 col-xs-12">Nama Barang</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <select class="form-control <?php $__errorArgs = ['id_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id_barang" name="id_barang" required>
                            <option selected disabled>Pilih Barang</option>
                            <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($b->id); ?>"><?php echo e($b->nama_barang); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['id_barang'];
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
                    <label for="jumlah_barang" class="control-label col-md-2 col-sm-3 col-xs-12">Jumlah Barang</label>
                    <div class="col-md-5 col-sm-5 col-xs-6">
                         <input type="number" class="form-control <?php $__errorArgs = ['jumlah_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jumlah_barang" name="jumlah_barang" required value="<?php echo e(old('jumlah_barang')); ?>" placeholder="Jumlah Barang">

                        <?php $__errorArgs = ['jumlah_barang'];
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
                    <div class="col-md-5 col-sm-4 col-xs-6">
                        <input type="text" class="form-control <?php $__errorArgs = ['nama_satuan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_satuan" name="nama_satuan" required value="<?php echo e(old('nama_satuan')); ?>" placeholder="Satuan" readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="harga_barang" class="control-label col-md-2 col-sm-3 col-xs-12">Harga Barang</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <input type="number" class="form-control <?php $__errorArgs = ['harga_barang'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="harga_barang" name="harga_barang" required value="<?php echo e(old('harga_barang')); ?>" placeholder="Harga Barang">
                        <?php $__errorArgs = ['harga_barang'];
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
                    <label for="harga_total" class="control-label col-md-2 col-sm-3 col-xs-12">Harga Total</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <input type="number" class="form-control <?php $__errorArgs = ['harga_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="harga_total" name="harga_total" required value="<?php echo e(old('harga_total')); ?>" placeholder="Harga Total">
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

                <div class="ln_solid"></div>

                <div class="form-group">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" id="submit" class="btn btn-success">Simpan</button>
                        
                        <a href="<?php echo e(route('pembelian.index')); ?>" class="btn btn-primary">Batal</a>
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
            $('.cancel').click(function(e){
                e.preventDefault();
                const _token = "<?php echo e(csrf_token()); ?>";
                const id = $(this).data('id');
                let url = "<?php echo e(route('pembelian.destroy', ':id')); ?>";
                url = url.replace(':id',id);
                let pembelianIndex = "<?php echo e(route('pembelian.index')); ?>"
                $.post( url, { id, _token, _method:"DELETE" } )
                    .done(function(data) {
                    window.location = pembelianIndex;
                });
            });
            
            $('#id_barang').change(function(){
                var id = $(this).val();
                var url = "<?php echo e(route('json.barang', ':id')); ?>";
                var jumlah_barang = $('#jumlah_barang').val();
                url=url.replace(':id',id);

                $.get( url, function( data ) {
                    $('#harga_barang').val(data.harga_beli);
                    $('#nama_satuan').val(data.satuan.nama_satuan);
                });
            })

            $('#jumlah_barang').keyup(function(){
                var id = $('#id_barang').val();
                var url = "<?php echo e(route('json.barang', ':id')); ?>";
                url=url.replace(':id',id);
                var jumlah_barang = $(this).val();

                $.get( url, function( data ) {
                    var harga_total = jumlah_barang * parseInt(data.harga_beli);
                    $('#harga_total').val(harga_total);
                });
            })
            
        });

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pembelian/create.blade.php ENDPATH**/ ?>