
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Penjualan</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <div class="row">
                <div class="col-lg-6">
                    <a type="button" class="btn btn-success" href="<?php echo e(route('penjualan.create')); ?>" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Tambah Transaksi</p></a>
                </div>
                <div class="col-lg-3">
                    <div class="dropdown filter-style">
                        <button class="btn btn-default dropdown-toggle filter-style2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Filter Data 
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu filter-style3" aria-labelledby="dropdownMenu1">
                            <li><a href="<?php echo e(route('penjualan.index', ['urutkanTanggal=desc'])); ?>">Tanggal Baru - Lama</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['urutkanTanggal=asc'])); ?>">Tanggal Lama - Baru</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['urutkanHargaTotal=asc'])); ?>">Harga Total Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['urutkanHargaTotal=desc'])); ?>">Harga Total Tinggi - Rendah</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['urutkanJumlah=asc'])); ?>">Jumlah Rendah - Tinggi</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['urutkanJumlah=desc'])); ?>">Jumlah Tinggi - Rendah</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['lunas'])); ?>">Lunas</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['belumLunas'])); ?>">Belum Lunas</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['grosir'])); ?>">Grosir</a></li>
                            <li><a href="<?php echo e(route('penjualan.index', ['ecer'])); ?>">Ecer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <form action="<?php echo e(route('penjualan.index')); ?>" method="GET">
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
                        <th class="column-title">Pelanggan</th>
                        <th class="column-title">Nama Barang</th>
                        <th class="column-title">Jenis Pembelian</th>
                        <th class="column-title">Jumlah Barang</th>
                        <th class="column-title">Harga Total</th>
                        <th class="column-title">Status</th>
                        <th class="column-title">Aksi</th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php if($request->has('urutkanTanggal') || $request->has('urutkanHargaTotal')): ?>
                            <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="even pointer">
                                    <td><?php echo e($penjualan->firstItem() + $key); ?>.</td>
                                    <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                    <td><?php echo e($p->kodePenjualan); ?></td>

                                    <?php if($p->jenis == 'grosir'): ?>
                                        <td><?php echo e($p->pelanggan->nama_pelanggan); ?></td>
                                    <?php else: ?>
                                        <td><?php echo e($p->pelanggan_ecer); ?></td>
                                    <?php endif; ?>

                                    <td><?php echo e($p->barang->nama_barang); ?></td>
                                    <td><?php echo e($p->jenis); ?></td>
                                    <td><?php echo e($p->jumlah_barang); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->detailPenjualan[0]->harga_total)); ?></td>
                                    <td><strong><?php echo e($p->detailPenjualan[0]->status); ?></strong></td>
                                    <td> 
                                        <a href="<?php echo e(route('penjualan.detail', $p->id)); ?>" class="btn btn-primary btn-xs" type="button">Detail</a>
                                        <form action="<?php echo e(route('penjualan.destroy', $p->id)); ?>" method="POST" style="display: inline;"> 
                                        <?php echo csrf_field(); ?> 
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php elseif($request->has('urutkanDibayar') || $request->has('urutkanKekurangan')): ?>
                            <?php $__currentLoopData = $detailPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($detailPenjualan->firstItem() + $key); ?>.</td>
                                <td><?php echo e(date('m-d-Y', strtotime($d->penjualan->tanggal))); ?></td>
                                <td><?php echo e($d->penjualan->kodePenjualan); ?></td>

                                <?php if($d->penjualan->jenis == 'grosir'): ?>
                                    <td><?php echo e($d->penjualan->pelanggan->nama_pelanggan); ?></td>
                                <?php else: ?>
                                    <td><?php echo e($d->penjualan->pelanggan_ecer); ?></td>
                                <?php endif; ?>

                                <td><?php echo e($d->penjualan->barang->nama_barang); ?></td>
                                <td><?php echo e($d->penjualan->jenis); ?></td>
                                <td><?php echo e($d->penjualan->jumlah_barang); ?> <?php echo e($d->penjualan->barang->satuan->nama_satuan); ?></td>
                                <td>Rp. <?php echo e(number_format($d->harga_total)); ?></td>
                                <td><strong><?php echo e($d->status); ?></strong></td>
                                <td> 
                                    <a href="<?php echo e(route('penjualan.detail', $d->id)); ?>" class="btn btn-primary btn-xs" type="button">Detail</a>
                                    <form action="<?php echo e(route('penjualan.destroy', $d->id)); ?>" method="POST" style="display: inline;"> 
                                    <?php echo csrf_field(); ?> 
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        <?php else: ?> 
                            <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="even pointer">
                                    <td><?php echo e($penjualan->firstItem() + $key); ?>.</td>
                                    <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                    <td><?php echo e($p->kodePenjualan); ?></td>

                                    <?php if($p->jenis == 'grosir'): ?>
                                        <td><?php echo e($p->pelanggan->nama_pelanggan); ?></td>
                                    <?php else: ?>
                                        <td><?php echo e($p->pelanggan_ecer); ?></td>
                                    <?php endif; ?>

                                    <td><?php echo e($p->barang->nama_barang); ?></td>
                                    <td><?php echo e($p->jenis); ?></td>
                                    <td><?php echo e($p->jumlah_barang); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->detailPenjualan[0]->harga_total)); ?></td>
                                    <td><strong><?php echo e($p->detailPenjualan[0]->status); ?></strong></td>
                                    <td> 
                                        <a href="<?php echo e(route('penjualan.detail', $p->id)); ?>" class="btn btn-primary btn-xs" type="button">Detail</a>
                                        <form action="<?php echo e(route('penjualan.destroy', $p->id)); ?>" method="POST" style="display: inline;"> 
                                        <?php echo csrf_field(); ?> 
                                        <?php echo method_field('delete'); ?>
                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <?php if($request->has('urutkanHargaTotal') || $request->has('urutkanTanggal')): ?>
                    <?php echo e($penjualan->links()); ?>

                <?php elseif($request->has('urutkanDibayar') || $request->has('urutkanKekurangan')): ?>
                    <?php echo e($detailPenjualan->links()); ?>

                <?php endif; ?>
            </div>
                  
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/transaksi/penjualan/index.blade.php ENDPATH**/ ?>