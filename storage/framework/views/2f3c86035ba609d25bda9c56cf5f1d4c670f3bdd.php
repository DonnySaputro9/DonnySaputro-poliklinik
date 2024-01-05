
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Pembelian</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
        
            <div class="row">
                <div class="col-lg-6">
                    <a type="button" class="btn btn-success" href="<?php echo e(route('pembelian.create')); ?>" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Tambah Transaksi</p></a>
                </div>
                <div class="col-lg-3">
                    <div class="dropdown filter-style">
                        <button class="btn btn-default dropdown-toggle filter-style2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Filter Data 
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu filter-style3" aria-labelledby="dropdownMenu1">
                            <li><a href="<?php echo e(route('pembelian.index', ['urutkanTanggal=desc'])); ?>">Tanggal Baru - Lama</a></li>
                            <li><a href="<?php echo e(route('pembelian.index', ['urutkanTanggal=asc'])); ?>">Tanggal Lama - Baru</a></li>
                            <li><a href="<?php echo e(route('pembelian.index', ['urutkanHargaTotal=asc'])); ?>">Harga Total Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('pembelian.index', ['urutkanHargaTotal=desc'])); ?>">Harga Total Tinggi - Rendah</a></li>
                            <li><a href="<?php echo e(route('pembelian.index', ['urutkanJumlah=asc'])); ?>">Jumlah Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('pembelian.index', ['urutkanJumlah=desc'])); ?>">Jumlah Tinggi - Rendah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <form action="<?php echo e(route('pembelian.index')); ?>" method="GET">
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
                        <th class="column-title">Kode Pembelian</th>
                        <th class="column-title">Suplier</th>
                        <th class="column-title">Nama Barang</th>
                        <th class="column-title">Harga Barang</th>
                        <th class="column-title">Jumlah Barang</th>
                        <th class="column-title">Harga Total</th>
                        <th class="column-title">Aksi</th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $pembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($pembelian->firstItem() + $key); ?>.</td>
                                <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                <td><?php echo e($p->kodePembelian); ?></td>
                                <td><?php echo e($p->suplier->nama_suplier); ?></td>
                                <td><?php echo e($p->barang->nama_barang); ?></td>
                                <td>Rp. <?php echo e(number_format($p->barang->harga_beli)); ?></td>
                                <td><?php echo e(number_format($p->jumlah_barang)); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                <td>Rp. <?php echo e(number_format($p->harga_total)); ?></td> 
                                <td>
                                    <form action="<?php echo e(route('pembelian.destroy', $p->id)); ?>" method="POST" style="display: inline;"> 
                                    <?php echo csrf_field(); ?> 
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($pembelian->links()); ?> 
            </div>
                   
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/pembelian/index.blade.php ENDPATH**/ ?>