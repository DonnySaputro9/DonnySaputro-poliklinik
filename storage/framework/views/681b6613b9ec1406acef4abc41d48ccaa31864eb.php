
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Detail Transaksi Pembelian</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <form action="" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="kode_penjualan" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Tanggal Transaksi</label>
                    <div class="col-md-4 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <input type="text" class="form-control" id="kode_penjualan" name="kode_penjualan" readonly value="<?php echo e($kodePembelian->pembelian[0]->tanggal->format('d-m-Y')); ?>" placeholder="Masukan Kode penjualan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_pelanggan" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Nama Suplier</label>
                    <div class="col-md-4 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" readonly value="<?php echo e($kodePembelian->pembelian[0]->suplier->nama_suplier); ?>" placeholder="Nama Pelanggan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="id_barang" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Kode Pembelian</label>
                    <div class="col-md-4 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                        <input type="text" class="form-control" id="id_barang" name="id_barang" readonly value="<?php echo e($kodePembelian->pembelian[0]->kodePembelian->kode_pembelian); ?>" placeholder="Nama Barang">
                    </div>
                </div>
            </form>

            <div class="x_title" style="margin-top: 30px;">
                <h2>Riwayat Transaksi</h2>
                <div class="clearfix"></div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Kode Pembelian</th>
                        <th class="column-title">Nama Barang</th>
                        <th class="column-title">Harga Barang</th>
                        <th class="column-title">Jumlah</th>
                        <th class="column-title">Sub Total</th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $kodePembelian->pembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($loop->iteration); ?>.</td>
                                <td><?php echo e($p->kodePembelian->kode_pembelian); ?></td>
                                <td><?php echo e($p->barang->nama_barang); ?></td>
                                <td>Rp. <?php echo e(number_format($p->harga_barang)); ?></td>
                                <td><?php echo e(number_format($p->jumlah_barang)); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                <td>Rp. <?php echo e(number_format($p->sub_total)); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        
            
            <?php 
                $jumlah = 0;
            ?>

            <div style="display: none;">
                <?php $__currentLoopData = $kodePembelian->pembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <p><?php echo e($data->harga_total); ?></p>
                    <p><?php $jumlah += $data->sub_total ?></p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <div style="display: block; position: absolute; right: 0%;">
                <div class="x_content">
                    <form class="form-horizontal form-label-left">
                    <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="total" class="control-label col-md-4 col-sm-4 col-xs-4">Harga Total</label>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control" required readonly value="<?php echo "$jumlah" ?>" placeholder="Total" style="margin: 0 10px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <a type="button" class="btn btn-primary" href="<?php echo e(route('pembelian.index')); ?>" style="margin: 70px 0 20px 0;"><p style="margin: 0; font-size: 12px;">Kembali</p></a>

        </div> 
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pembelian/detail.blade.php ENDPATH**/ ?>