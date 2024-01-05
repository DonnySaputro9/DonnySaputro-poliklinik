
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
    <div class="x_panel">
        <div class="x_title">
            <h5>Tanggal : <strong><?php echo e(date('m-d-Y', strtotime($pengiriman->tanggal))); ?></strong></h5>
            <h5>Kode Penjualan : <strong><?php echo e($pengiriman->penjualan->kodePenjualan); ?></strong></h5>
            <h5>Nama Petugas : <strong><?php echo e($pengiriman->petugas); ?></strong></h5>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Nama Pelanggan</th>
                        <th class="column-title">Alamat</th>
                        <th class="column-title">No. Telepon</th>
                        <th class="column-title">Nama Barang</th>
                        <th class="column-title">Jumlah Barang</th>
                        <th class="column-title">Jenis</th>
                        <th class="column-title">Harga Total</th>
                        </th>
                    </tr>
                    </thead>

                    
                    <?php 
                        $no = 1;
                    ?>

                    <tbody>
                        <?php $__currentLoopData = $dataPengiriman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pengiriman->penjualan->kodePenjualan == $data->penjualan->kodePenjualan): ?>
                                <tr class="even pointer">
                                    <td><?php echo $no++ ?>.</td>
                                    <td><?php echo e($data->penjualan->pelanggan->nama_pelanggan); ?></td>
                                    <td><?php echo e($data->penjualan->pelanggan->alamat); ?></td>
                                    <td><?php echo e($data->penjualan->pelanggan->no_telepon); ?></td>
                                    <td><?php echo e($data->penjualan->barang->nama_barang); ?></td>
                                    <td><?php echo e(number_format($data->penjualan->jumlah_barang)); ?> <?php echo e($data->penjualan->barang->satuan->nama_satuan); ?></td>
                                    <td><?php echo e($data->penjualan->jenis); ?></td>
                                    <td>Rp. <?php echo e(number_format($data->penjualan->harga_total)); ?></td>
                                </tr>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            
            <div style="display: block; position: absolute; right: 0%;">
                <div class="x_content">
                    <form class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label for="status" class="control-label col-md-4 col-sm-4 col-xs-4">Status</label>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control" id="status" required readonly value="<?php echo e($pengiriman->status); ?>" placeholder="Status" style="margin: 0 10px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="ln_solid" style="margin: 60px 0 0 0;"></div>

            <div class="form-group" style="margin: 20px 20px 20px 0;">
                <div class="row">
                    <div class="col-md-11 col-sm-10"></div>
                    <div class="col-md-1 col-sm-2 col-xs-12">
                        <a type="button" href="<?php echo e(route('pengiriman.index')); ?>" class="btn btn-success">Simpan</a>
                    </div>
                </div>
            </div>
                
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pengiriman/transaksipengiriman.blade.php ENDPATH**/ ?>