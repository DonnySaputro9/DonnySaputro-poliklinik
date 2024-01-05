
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Detail Transaksi</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_title">
            <h5>Tanggal : <strong><?php echo e(date('m-d-Y', strtotime($pengiriman->penjualan->tanggal))); ?></strong></h5>
            <h5>Kode Penjualan : <strong><?php echo e($pengiriman->penjualan->kodePenjualan); ?></strong></h5>
            <h5>Nama Pelanggan : 
                <strong>
                    <?php if($pengiriman->penjualan->jenis == 'grosir'): ?>
                        <?php echo e($pengiriman->penjualan->pelanggan->nama_pelanggan); ?>

                    <?php else: ?>
                        <?php echo e($pengiriman->penjualan->pelanggan_ecer); ?>

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
                        <th class="column-title">Jenis Pembelian</th>
                        <th class="column-title">Harga Barang</th>
                        <th class="column-title">Jumlah</th>
                        <th class="column-title">Harga Total</th>
                        <th class="column-title">Dibayar</th>
                        <th class="column-title">Kekurangan</th>
                        <th class="column-title">Status</th>
                    </tr>
                    </thead>

                    
                    <?php
                        $no = 1;
                    ?>

                    <tbody>
                        <?php $__currentLoopData = $dataPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($p->kodePenjualan == $pengiriman->penjualan->kodePenjualan): ?>
                                <tr class="even pointer">
                                    <td><?php echo e($no++); ?>.</td>
                                    <td><?php echo e($p->barang->nama_barang); ?></td>
                                    <td><?php echo e($p->jenis); ?></td>

                                    <?php if($p->jenis == 'grosir'): ?>
                                        <td>Rp. <?php echo e(number_format($p->barang->harga_grosir)); ?></td>
                                    <?php else: ?>
                                        <td>Rp. <?php echo e(number_format($p->barang->harga_ecer)); ?></td>
                                    <?php endif; ?>

                                    <td><?php echo e(number_format($p->jumlah_barang)); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->harga_total)); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->detailPenjualan[0]->dibayar)); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->detailPenjualan[0]->kekurangan)); ?></td>
                                    <td><strong><?php echo e($p->detailPenjualan[0]->status); ?></strong></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="x_title" style="margin-top: 50px;">
                <h2>Riwayat pengiriman Barang</h2>
                <div class="clearfix"></div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Tanggal</th>
                        <th class="column-title">Kode Penjualan</th>
                        <th class="column-title">Nama Pelanggan</th>
                        <th class="column-title">Alamat</th>
                        <th class="column-title">Petugas</th>
                        <th class="column-title">Status</th>
                    </tr>
                    </thead>

                    
                    <?php
                        $nomer = 1;
                    ?>

                    <tbody>
                        <?php $__currentLoopData = $dataPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($p->kodePenjualan == $pengiriman->penjualan->kodePenjualan): ?>
                                <tr class="even pointer">
                                    <td><?php echo e($nomer++); ?>.</td>
                                    <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                    <td><?php echo e($p->kodePenjualan); ?></td>
                                    <td><?php echo e($p->pelanggan->nama_pelanggan); ?></td>
                                    <td><?php echo e($p->pelanggan->alamat); ?></td>
                                    <td><?php echo e($p->pengiriman[0]->petugas); ?></td>
                                    <td><strong><?php echo e($p->pengiriman[0]->status); ?></strong></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            
            <a type="button" class="btn btn-primary" href="<?php echo e(route('pengiriman.index')); ?>" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Kembali</p></a>
           
        </div> 
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pengiriman/detail.blade.php ENDPATH**/ ?>