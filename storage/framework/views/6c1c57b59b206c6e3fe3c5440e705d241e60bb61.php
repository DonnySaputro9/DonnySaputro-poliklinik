
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Piutang</h2>
            <div class="clearfix"></div>
        </div>

        <div class="row">
            <div class="col-lg-6">
            </div>
            <div class="col-lg-3">
                <div class="dropdown filter-style">
                    <button class="btn btn-default dropdown-toggle filter-style2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Filter Data 
                    <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu filter-style3" aria-labelledby="dropdownMenu1">
                        <li><a href="<?php echo e(route('piutang.index', ['urutkanTanggal=desc'])); ?>">Tanggal Penjualan Baru - Lama</a></li>
                        <li><a href="<?php echo e(route('piutang.index', ['urutkanTanggal=asc'])); ?>">Tanggal Penjualan Lama - Baru</a></li>
                        <li><a href="<?php echo e(route('piutang.index', ['urutkanHargaTotal=asc'])); ?>">Harga Total Rendah - Tinggi</a></li>
                        <li><a href="<?php echo e(route('piutang.index', ['urutkanHargaTotal=desc'])); ?>">Harga Total Tinggi - Rendah</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <form action="<?php echo e(route('piutang.index')); ?>" method="GET">
                    <div class="input-group">
                        <input type="text" name="cari" class="form-control" placeholder="Masukan Kata Kunci...." value="<?php echo e($cari); ?>">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

        <div class="x_content">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title">No.</th>
                            <th class="column-title">Tanggal Penjualan</th>
                            <th class="column-title">Kode Penjualan</th>
                            <th class="column-title">Total</th>
                            <th class="column-title">Dibayar</th>
                            <th class="column-title">Kekurangan</th>
                            <th class="column-title">Status</th>
                            <th class="column-title">Tanggal Dibayar</th>
                            <th class="column-title">Aksi</th>
                            </th>
                        </tr>
                    </thead>

                    
                    <?php 
                        $no = 1;
                    ?>

                    <tbody>
                        <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($p->detailPenjualan[0]->status == 'Lunas'): ?>
                            <?php else: ?>
                                <tr class="even pointer">
                                    <td><?php echo e($no++); ?>.</td>
                                    <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                    <td><?php echo e($p->kodePenjualan); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->detailPenjualan[0]->harga_total)); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->detailPenjualan[0]->dibayar)); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->detailPenjualan[0]->kekurangan)); ?></td>
                                    <td><?php echo e($p->detailPenjualan[0]->status); ?></td>
                                    <td><?php echo e(date('m-d-Y', strtotime($p->detailPenjualan[0]->tanggal))); ?></td>
                                    <td>
                                        <a class="btn btn-success btn-xs btn-bayar" id="bayar-<?php echo e($key + 1); ?>" type="button" data-toggle="modal" data-target="#myModal-<?php echo e($p->id); ?>">Bayar</a>
                                    </td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>  
        </div>
    </div>
</div>

<?php $__currentLoopData = $detailPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- Modal -->
    <div class="modal fade modal-style" id="myModal-<?php echo e($d->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Bayar Sekarang</h4>
                </div>

                <form action="<?php echo e(route('piutang.bayar', $d->id)); ?>" method="POST" class="form-horizontal form-label-left">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <input type="hidden" id="sudah_dibayar" value="<?php echo e($d->dibayar); ?>">
                        <input type="hidden" id="id_penjualan" name="id_penjualan"  readonly value="<?php echo e($d->id); ?>">
                        <input type="hidden" id="harga_total" name="harga_total"  value="<?php echo e($d->harga_total); ?>">
                        
                        <div class="form-group">
                            <label for="tanggal" class="control-label col-md-2 col-sm-3 col-xs-12">Tanggal</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="date" class="form-control <?php $__errorArgs = ['tanggal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tanggal" required >
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
                            <label for="dibayar" class="control-label col-md-2 col-sm-3 col-xs-12">Bayar</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input data-modal="myModal-<?php echo e($d->id); ?>" type="number" class="dibayar form-control <?php $__errorArgs = ['dibayar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="dibayar" name="dibayar" required placeholder="Masukkan Jumlah Pembayaran...">
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
                                <input type="number" class="form-control" id="kekurangan" name="kekurangan" readonly value="<?php echo e($d->kekurangan); ?>">
                            </div>
                        </div>
                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="status" class="control-label col-md-2 col-sm-3 col-xs-12">Status</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input type="text" class="form-control" id="status" name="status" readonly value="<?php echo e($d->status); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="sumbit" class="btn btn-success">Bayar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function() {
            $('.dibayar').keyup(function(){
                let modal = $(this).data('modal');

                let harga_total = $(`#${modal} #harga_total`).val();
                let sudah_dibayar = $(`#${modal} #sudah_dibayar`).val();
                let nyicil = $(`#${modal} #dibayar`).val();
                let kekurangan = $(`#${modal} #kekurangan`).val();

                let total = harga_total - sudah_dibayar - nyicil;

                kekurangan = $(`#${modal} #kekurangan`).val(total);

                console.log(kekurangan.val());

                if (kekurangan.val() <= 0) {
                    $(`#${modal} #status`).val('Lunas');
                }else {
                    $(`#${modal} #status`).val('Belum Lunas');
                }
            });

            $( ".btn-bayar" ).click(function() {
                let id = $(this).val();
            });
            
        });

    </script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/piutang/index.blade.php ENDPATH**/ ?>