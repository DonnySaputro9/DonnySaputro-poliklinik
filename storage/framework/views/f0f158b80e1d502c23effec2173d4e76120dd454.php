
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 10px;">
    <div class="x_panel">
        <div class="x_title">
            <h5>Tanggal : <strong><?php echo e($pembelian->tanggal->format('d-m-Y')); ?></strong></h5>
            <h5>Nama Suplier : <strong><?php echo e($pembelian->suplier->nama_suplier); ?></strong></h5>
            <h5>Kode Penjualan : <strong><?php echo e($pembelian->kodePembelian->kode_pembelian); ?></strong></h5>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Nama Barang</th>
                        <th class="column-title">Harga Barang</th>
                        <th class="column-title">Jumlah Barang</th>
                        <th class="column-title">Sub Total</th>
                        </th>
                    </tr>
                    </thead>

                    
                    <?php 
                        $no = 1;
                    ?>

                    <tbody>
                        <?php $__currentLoopData = $dataPembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($pembelian->kodePembelian->kode_pembelian == $data->kodePembelian->kode_pembelian): ?>
                                <tr class="even pointer">
                                    <td><?php echo $no++ ?>.</td>
                                    <td><?php echo e($data->barang->nama_barang); ?></td>
                                    <td>Rp. <?php echo e(number_format($data->harga_barang)); ?></td>
                                    <td><?php echo e(number_format($data->jumlah_barang)); ?> <?php echo e($data->barang->satuan->nama_satuan); ?></td>
                                    <td>Rp. <?php echo e(number_format($data->sub_total)); ?></td>
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
                <?php $__currentLoopData = $dataPembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($pembelian->kodePembelian->kode_pembelian == $data->kodePembelian->kode_pembelian): ?>
                        <p><?php echo e($data->harga_total); ?></p>
                        <p><?php $jumlah += $data->sub_total ?></p>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            
            <form action="<?php echo e(route('pembelian.detailTransaksiPembelian')); ?>" method="POST" class="form-horizontal form-label-left">
            <?php echo csrf_field(); ?>
                <div style="display: block; position: absolute; right: 0%;">
                    <div class="x_content">
                        <div class="form-group">
                            <div class="col-md-10 col-sm-9 col-xs-12">
                                <input type="hidden" class="form-control" id="id_kodePembelian" name="id_kodePembelian" required readonly value="<?php echo e($pembelian->kodePembelian->id); ?>" placeholder="Masukan Kode Pembelian">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="harga_total" class="control-label col-md-4 col-sm-4 col-xs-4">Harga Total</label>
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <input type="text" class="form-control" id="harga_total" name="harga_total" required readonly value="<?php echo "$jumlah" ?>" placeholder="Hrga Total" style="margin: 0 10px;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ln_solid" style="margin: 10px 0 0 0;"></div>

                <div class="form-group" style="margin: 70px 0 30px 0;">
                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                        <button type="submit" id="submit" class="btn btn-success">Simpan</button>
                        <a type="button" href="<?php echo e(route('pembelian.tambahBarang')); ?>" class="btn btn-primary">Tambah Barang</a>
                    </div>
                </div>
            </form>
        
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pembelian/transaksipembelian.blade.php ENDPATH**/ ?>