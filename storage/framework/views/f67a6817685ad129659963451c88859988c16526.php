
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Detail Transaksi Penjualan</h2>
            <div class="clearfix"></div>
        </div>
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
                            <?php if($p->kodePenjualan == $penjualan->kodePenjualan): ?>
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
                        <th class="column-title">Kode Transaksi</th>
                        <th class="column-title">Nama Pelanggan</th>
                        <th class="column-title">Alamat</th>
                        <th class="column-title">Petugas</th>
                        <th class="column-title">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $penjualan->pengiriman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($loop->iteration); ?>.</td>
                                <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                <td><?php echo e($p->penjualan->kodePenjualan); ?></td>
                                <td><?php echo e($p->penjualan->pelanggan->nama_pelanggan); ?></td>
                                <td><?php echo e($p->penjualan->pelanggan->alamat); ?></td>
                                <td><?php echo e($p->petugas); ?></td>
                                <td><?php echo e($p->status); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            
            <a type="button" class="btn btn-primary" href="<?php echo e(route('piutang.index')); ?>" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Kembali</p></a>

        </div> 
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function() {
            $('#dibayar').keyup(function(){
                let harga_total = $(`#harga_total`).val();
                let sudah_dibayar = $(`#sudah_dibayar`).val();
                let nyicil = $(`#dibayar`).val();
                let kekurangan = $(`#kekurangan`).val();

                let total = harga_total - sudah_dibayar - nyicil;

                kekurangan = $(`#kekurangan`).val(total);

                console.log(kekurangan.val());

                if (kekurangan.val() <= 0) {
                    $(`#status`).val('Lunas');
                }else {
                    $(`#status`).val('Belum Lunas');
                }
            });
            
        });

    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/piutang/detail.blade.php ENDPATH**/ ?>