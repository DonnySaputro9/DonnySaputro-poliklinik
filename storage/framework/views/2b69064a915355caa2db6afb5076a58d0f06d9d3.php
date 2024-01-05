
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
    <div class="x_panel">
        <div class="x_title">
            <h5>Tanggal : <strong><?php echo e(date('m-d-Y', strtotime($penjualan->tanggal))); ?></strong></h5>
            <h5>Kode Penjualan : <strong><?php echo e($penjualan->kodePenjualan); ?></strong></h5>
            <h5>Nama Pelanggan : 
                <strong>
                    <?php if($penjualan->jenis == 'grosir'): ?>
                        <?php echo e($penjualan->pelanggan->nama_pelanggan); ?>

                    <?php else: ?>
                        <?php echo e($penjualan->pelanggan_ecer); ?>

                    <?php endif; ?>
                </strong></h5>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Nama Barang</th>
                        <th class="column-title">Jenis</th>
                        <th class="column-title">Harga Barang</th>
                        <th class="column-title">Jumlah Barang</th>
                        <th class="column-title">Harga Total</th>
                        </th>
                    </tr>
                    </thead>

                    
                    <?php 
                        $no = 1;
                    ?>

                    <tbody>
                        <?php $__currentLoopData = $dataPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($penjualan->kodePenjualan == $data->kodePenjualan): ?>
                                <tr class="even pointer">
                                    <td><?php echo $no++ ?>.</td>
                                    <td><?php echo e($data->barang->nama_barang); ?></td>
                                    <td><?php echo e($data->jenis); ?></td>
                                        <?php if($data->jenis == 'grosir'): ?>
                                            <td>Rp. <?php echo e(number_format($data->barang->harga_grosir)); ?></td>
                                        <?php else: ?>
                                            <td>Rp. <?php echo e(number_format($data->barang->harga_ecer)); ?></td>
                                        <?php endif; ?>
                                    <td><?php echo e($data->jumlah_barang); ?> <?php echo e($data->barang->satuan->nama_satuan); ?></td>
                                    <td>Rp. <?php echo e(number_format($data->harga_total)); ?></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            
            
            <?php 
                $jumlah = 0;
            ?>

            <div style="display: none;">
                <?php $__currentLoopData = $dataPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($penjualan->kodePenjualan == $data->kodePenjualan): ?>
                        <p><?php echo e($data->harga_total); ?></p>
                        <p><?php $jumlah += $data->harga_total ?></p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        <form action="<?php echo e(route('penjualan.detailTransaksiPenjualan')); ?>" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
                <div style="display: block; position: absolute; right: 0%;">
                    <div class="x_content">
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="hidden" class="form-control" id="id_penjualan" name="id_penjualan" required readonly value="<?php echo e($penjualan->id); ?>" placeholder="Masukan Kode Penjualan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="hidden" class="form-control" id="tanggal" name="tanggal" required readonly value="<?php echo e(date('d-m-Y', strtotime($penjualan->tanggal))); ?>" placeholder="Masukan Kode Penjualan">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_total" class="control-label col-md-4 col-sm-4 col-xs-4">Total</label>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control" id="harga_total" name="harga_total" required readonly value="<?php echo "$jumlah" ?>" placeholder="Total" style="margin: 0 10px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dibayar" class="control-label col-md-4 col-sm-4 col-xs-4">Dibayar</label>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control <?php $__errorArgs = ['dibayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="dibayar" name="dibayar" required autofocus value="<?php echo e(old('dibayar')); ?>" placeholder="Masukan Jumlah Pembayaran" style="margin: 0 10px;">
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
                            <label for="kekurangan" class="control-label col-md-4 col-sm-4 col-xs-4">Kekurangan</label>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control <?php $__errorArgs = ['kekurangan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="kekurangan" name="kekurangan" required readonly value="<?php echo e(old('kekurangan')); ?>" placeholder="Kekurangan" style="margin: 0 10px;">
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
                                <input type="hidden" class="form-control" id="status" name="status" required readonly value="" placeholder="Status" style="margin: 0 10px;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ln_solid" style="margin: 10px 0 0 0;"></div>

                <div class="form-group row" style="margin: 170px 0 30px 0; padding: 0 20px 0 0">
                    <div class="col-md-11 col-sm-11 col-xs-9"></div>
                    <div class="col-md-1 col-sm-1 col-xs-3">
                        <button type="submit" id="submit" class="btn btn-success">Simpan</button>
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
            $('#dibayar').keyup(function(){
                var harga_total = $('#harga_total').val();
                var dibayar = $('#dibayar').val();
                var kekurangan = harga_total - dibayar;

                $('#kekurangan').val(kekurangan);

                if (kekurangan <= 0) {
                    $('#status').val('Lunas');
                }else {
                    $('#status').val('Belum Lunas');
                }
            });
            
        });

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/penjualan/transaksipenjualan.blade.php ENDPATH**/ ?>