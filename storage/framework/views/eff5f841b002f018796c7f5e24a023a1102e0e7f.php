
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Barang</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <div class="row">
                <div class="col-lg-6">
                    <a type="button" class="btn btn-success" href="<?php echo e(route('data-barang.create')); ?>" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Tambah Data</p></a>
                </div>
                <div class="col-lg-3">
                    <div class="dropdown filter-style">
                        <button class="btn btn-default dropdown-toggle filter-style2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Filter Data 
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu filter-style3" aria-labelledby="dropdownMenu1">
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanNamaBarang=asc'])); ?>">Nama Barang A - Z</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanNamaBarang=desc'])); ?>">Nama Barang Z - A</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanHargaBeli=asc'])); ?>">Harga Beli Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanHargaBeli=desc'])); ?>">Harga Beli Tinggi - Rendah</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanHargaGrosir=asc'])); ?>">Harga Grosir Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanHargaGrosir=desc'])); ?>">Harga Grosir Tinggi - Rendah</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanHargaEcer=asc'])); ?>">Harga Ecer Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanHargaEcer=desc'])); ?>">Harga Ecer Tinggi - Rendah</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanStok=asc'])); ?>">Stok Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('data-barang.index', ['urutkanStok=desc'])); ?>">Stok Tinggi - Rendah</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <form action="<?php echo e(route('data-barang.index')); ?>" method="GET">
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
                            <th class="column-title">Nama Barang</th>
                            <th class="column-title">Kategori</th>
                            <th class="column-title">Harga Beli</th>
                            <th class="column-title">Harga Grosir</th>
                            <th class="column-title">Harga Ecer</th>
                            <th class="column-title">Stok</th>
                            <th class="column-title">Satuan</th>
                            <th class="column-title">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($barang->firstItem() + $key); ?>.</td>
                                <td><?php echo e($b->nama_barang); ?></td>
                                <td><?php echo e($b->kategori->nama_kategori); ?></td>
                                <td>Rp. <?php echo e(number_format($b->harga_beli)); ?></td>
                                <td>Rp. <?php echo e(number_format($b->harga_grosir)); ?></td>
                                <td>Rp. <?php echo e(number_format($b->harga_ecer)); ?></td>
                                <td><?php echo e($b->stok); ?></td>
                                <td><?php echo e($b->satuan->nama_satuan); ?></td>
                                <td>
                                    <a href="<?php echo e(route('data-barang.edit', $b->id)); ?>" class="btn btn-primary btn-xs" type="button">Edit</a>
                                    <form action="<?php echo e(route('data-barang.destroy', $b->id)); ?>" method="POST" style="display: inline;"> 
                                    <?php echo csrf_field(); ?> 
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <?php echo e($barang->links()); ?>

            </div>
                    
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/barang/index.blade.php ENDPATH**/ ?>