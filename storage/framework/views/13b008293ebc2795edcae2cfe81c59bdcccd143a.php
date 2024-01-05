
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Form Tambah Barang</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            
            <form action="<?php echo e(route('penjualan.tambahBarangStore')); ?>" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <input type="hidden" class="form-control <?php $__errorArgs = ['id_kodePenjualan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="id_kodePenjualan" name="id_kodePenjualan" required value="<?php echo e(old('id_kodePenjualan', $kodePenjualan->id)); ?>" placeholder="Masukan Kode Penjualan">
                        <input type="hidden" class="form-control" id="tanggal" name="tanggal" required value="<?php echo e(old('tanggal', $penjualan->tanggal)); ?>" placeholder="Tanggal">
                        <input type="hidden" class="form-control" id="id_pelanggan" name="id_pelanggan" required value="<?php echo e(old('id_pelanggan', $pelanggan->id)); ?>" placeholder="Tanggal">
                        <?php $__errorArgs = ['id_kodePenjualan'];
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
                    <label for="jenis" class="control-label col-md-2 col-sm-3 col-xs-12">Jenis</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <select class="form-control <?php $__errorArgs = ['jenis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="jenis" name="jenis" required>
                            <option selected disabled>Jenis</option>
                            <option value="grosir">Grosir</option>
                            <option value="ecer">Ecer</option>
                        </select>
                        <?php $__errorArgs = ['jenis'];
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
unset($__errorArgs, $__bag); ?>" id="harga_barang" name="harga_barang" required value="<?php echo e(old('harga_barang')); ?>" placeholder="Harga barang">
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
                    <label for="sub_total" class="control-label col-md-2 col-sm-3 col-xs-12">Sub Total</label>
                    <div class="col-md-10 col-sm-9 col-xs-12">
                        <input type="number" class="form-control <?php $__errorArgs = ['sub_total'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="sub_total" name="sub_total" required value="<?php echo e(old('sub_total')); ?>" placeholder="Sub Total">
                        <?php $__errorArgs = ['sub_total'];
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
                        <a type="button" href="<?php echo e(route('penjualan.transaksiPenjualan')); ?>" class="btn btn-primary">Batal</a>
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
            $('#id_barang').change(function(){
                var id = $(this).val();
                var url = "<?php echo e(route('json.barang', ':id')); ?>";
                var jumlah_barang = $('#jumlah_barang').val();
                url=url.replace(':id',id);

                $.get( url, function( data ) {
                    $('#nama_satuan').val(data.satuan.nama_satuan);
                });
            })

            $('#jenis').change(function(){
                var id = $('#id_barang').val();
                var url = "<?php echo e(route('json.barang', ':id')); ?>";
                var jumlah_barang = $('#jumlah_barang').val();
                url=url.replace(':id',id);


                $.get( url, function( data ) {

                var jenis = $('#jenis').val();

                if (jenis == 'grosir') {
                    $('#harga_barang').val(data.harga_grosir);
                }else {
                    $('#harga_barang').val(data.harga_ecer);
                }

                });
        
            })

            $('#jumlah_barang').keyup(function(){
                var id = $('#id_barang').val();
                var url = "<?php echo e(route('json.barang', ':id')); ?>";
                url=url.replace(':id',id);
                var jumlah_barang = $(this).val();

                $.get( url, function( data ) {
                    var jenis = $('#jenis').val();

                    if (jenis == 'grosir') {
                        var sub_total = jumlah_barang * parseInt(data.harga_grosir);
                    }else {
                        var sub_total = jumlah_barang * parseInt(data.harga_ecer);
                    }
                    
                    $('#sub_total').val(sub_total);
                    
                });
            })
            
        });

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/penjualan/tambahbarang.blade.php ENDPATH**/ ?>