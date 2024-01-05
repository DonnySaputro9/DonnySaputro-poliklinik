
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Laporan Pengiriman</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <form action="<?php echo e(url('laporan-pengiriman')); ?>" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="dari_tanggal" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Dari Tanggal</label>
                    <div class="col-md-4 col-sm-9 col-xs-4" style="padding: 0 50px 0 0;">
                        <input type="date" class="form-control" id="dari_tanggal" name="dari_tanggal" value="<?php echo e($dari_tanggal); ?>">
                    </div> 
                </div>
                <div class="form-group">
                    <label for="sampai_tanggal" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Sampai Tanggal</label>
                    <div class="col-md-4 col-sm-9 col-xs-4" style="padding: 0 50px 0 0;">
                        <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal" value="<?php echo e($sampai_tanggal); ?>">
                    </div>
                </div>
                <a class="btn btn-success print" href="<?php echo e(route('laporanPengiriman.index')); ?>" style="margin: 20px 0 0 10px;"><p style="margin: 0; font-size: 12px;">Semua Pengiriman</p></a>
                <button type="submit" class="btn btn-primary print" name="submit" value="submit" style="margin: 20px 0 0 10px;"><p style="margin: 0; font-size: 12px;">Atur Tanggal</p></button>
            </form>

            <div class="table-responsive" style="margin-top: 30px;">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Tanggal</th>
                        <th class="column-title">Kode Transaksi</th>
                        <th class="column-title">Nama Pelanggan</th>
                        <th class="column-title">Alamat</th>
                        <th class="column-title">Harga Total</th>
                        <th class="column-title">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php if($request->submit == 'submit'): ?>
                            <?php $__currentLoopData = $filterPengiriman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($loop->iteration); ?>.</td>
                                <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                <td><?php echo e($p->penjualan->kodePenjualan); ?></td>
                                <td><?php echo e($p->penjualan->pelanggan->nama_pelanggan); ?></td>
                                <td><?php echo e($p->penjualan->pelanggan->alamat); ?></td>
                                <td>Rp. <?php echo e(number_format($p->penjualan->harga_total)); ?></td>
                                <td><strong><?php echo e($p->status); ?></strong></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <?php $__currentLoopData = $pengiriman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="even pointer">
                                    <td><?php echo e($loop->iteration); ?>.</td>
                                    <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                    <td><?php echo e($p->penjualan->kodePenjualan); ?></td>
                                    <td><?php echo e($p->penjualan->pelanggan->nama_pelanggan); ?></td>
                                    <td><?php echo e($p->penjualan->pelanggan->alamat); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->penjualan->harga_total)); ?></td>
                                    <td><strong><?php echo e($p->status); ?></strong></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-11 col-md-10 col-xs-10"></div>
                <div class="col-lg-1 col-md-2 col-xs-2">
                    <a type="button" class="btn btn-success print" id="print" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Cetak</p></a>
                </div>
            </div>

        </div> 
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function() {

            $( "#print" ).click(function() {
                window.print();
            });
            
        });

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/laporan/pengiriman/index.blade.php ENDPATH**/ ?>