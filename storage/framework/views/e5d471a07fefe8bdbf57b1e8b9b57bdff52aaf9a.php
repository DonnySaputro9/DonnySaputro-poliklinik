
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Pengiriman</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <div class="row">
                <div class="col-lg-6">
                    <a type="button" class="btn btn-success" href="<?php echo e(route('pengiriman.create')); ?>" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Tambah Transaksi</p></a>
                </div>
                <div class="col-lg-3">
                    <div class="dropdown filter-style">
                        <button class="btn btn-default dropdown-toggle filter-style2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Filter Data 
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu filter-style3" aria-labelledby="dropdownMenu1">
                            <li><a href="<?php echo e(route('pengiriman.index', ['urutkanTanggal=desc'])); ?>">Tanggal Baru - Lama</a></li>
                            <li><a href="<?php echo e(route('pengiriman.index', ['urutkanTanggal=asc'])); ?>">Tanggal Lama - Baru</a></li>
                            <li><a href="<?php echo e(route('pengiriman.index', ['urutkanHargaTotal=asc'])); ?>">Harga Total Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('pengiriman.index', ['urutkanHargaTotal=desc'])); ?>">Harga Total Tinggi - Rendah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <form action="<?php echo e(route('pengiriman.index')); ?>" method="GET">
                        <div class="input-group">
                            <input type="text" name="cari" class="form-control" placeholder="Masukan Kata Kunci...." value="<?php echo e($cari); ?>">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Cari</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Tanggal</th>
                        <th class="column-title">Kode Penjualan</th>
                        <th class="column-title">Nama Pelanggan</th>
                        <th class="column-title">Harga Total</th>
                        <th class="column-title">Status</th>
                        <th class="column-title">Aksi</th>
                        </th>
                    </tr>
                    </thead>
                    <tbody> 
                        <?php $__currentLoopData = $pengiriman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr class="even pointer">
                            <td><?php echo e($pengiriman->firstItem() + $key); ?>.</td>
                            <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                            <td><?php echo e($p->penjualan->kodePenjualan); ?></td>
                            <td><?php echo e($p->penjualan->pelanggan->nama_pelanggan); ?></td>
                            <td>Rp. <?php echo e(number_format($p->penjualan->harga_total)); ?></td>
                            <td><strong><?php echo e($p->status); ?></strong></td>
                            <td>
                                <a href="<?php echo e(route('pengiriman.detail', $p->id)); ?>" class="btn btn-primary btn-xs" type="button">Detail</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($pengiriman->links()); ?>

            </div>
                
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pengiriman/index.blade.php ENDPATH**/ ?>