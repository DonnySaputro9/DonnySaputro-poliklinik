
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Laporan Penjualan</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <form action="<?php echo e(url('laporan-penjualan')); ?>" method="POST" class="form-horizontal form-label-left">
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

                <div class="row">
                    <div class="col-lg-8 col-md-8 col-xs-8">
                        <a class="btn btn-success print" href="<?php echo e(route('laporanPenjualan.index')); ?>" style="margin: 20px 0 0 10px;"><p style="margin: 0; font-size: 12px;">Semua Pembelian</p></a>
                        <button type="submit" class="btn btn-primary print" name="submit" value="submit" style="margin: 20px 0 0 10px;"><p style="margin: 0; font-size: 12px;">Atur Tanggal</p></button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xs-4 print">
                        <div class="dropdown filter-style">
                            <button class="btn btn-default dropdown-toggle filter-style2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="margin: 20px 0 0 30px;">
                            Jenis Penjualan 
                            <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu filter-style-laporan" aria-labelledby="dropdownMenu1">
                                <li><a href="<?php echo e(route('laporanPenjualan.index', ['grosir'])); ?>">Grosir</a></li>
                                <li><a href="<?php echo e(route('laporanPenjualan.index', ['ecer'])); ?>">Ecer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>

            <div class="table-responsive print-view" style="margin-top: 20px;">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Tanggal</th>
                        <th class="column-title">Kode Transaksi</th>
                        <th class="column-title">Nama Barang</th>
                        <th class="column-title">Jenis</th>
                        <th class="column-title">Harga Barang</th>
                        <th class="column-title">Jumlah</th>
                        <th class="column-title">Sub Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php if($request->submit == 'submit'): ?>
                            <?php $__currentLoopData = $filterPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($loop->iteration); ?>.</td>
                                <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                <td><?php echo e($p->kodePenjualan); ?></td>
                                <td><?php echo e($p->barang->nama_barang); ?></td>
                                <td><?php echo e($p->jenis); ?></td>
                                
                                <?php if($p->jenis == 'grosir'): ?>
                                    <td>Rp. <?php echo e(number_format($p->barang->harga_grosir)); ?></td>
                                <?php else: ?>
                                    <td>Rp. <?php echo e(number_format($p->barang->harga_ecer)); ?></td>
                                <?php endif; ?>
                                
                                <td><?php echo e(number_format($p->jumlah_barang)); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                <td>Rp. <?php echo e(number_format($p->harga_total)); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="even pointer">
                                    <td><?php echo e($loop->iteration); ?>.</td>
                                    <td><?php echo e(date('m-d-Y', strtotime($p->tanggal))); ?></td>
                                    <td><?php echo e($p->kodePenjualan); ?></td>
                                    <td><?php echo e($p->barang->nama_barang); ?></td>
                                    <td><?php echo e($p->jenis); ?></td>
                                    
                                    <?php if($p->jenis == 'grosir'): ?>
                                        <td>Rp. <?php echo e(number_format($p->barang->harga_grosir)); ?></td>
                                    <?php else: ?>
                                        <td>Rp. <?php echo e(number_format($p->barang->harga_ecer)); ?></td>
                                    <?php endif; ?>
                                    
                                    <td><?php echo e(number_format($p->jumlah_barang)); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                    <td>Rp. <?php echo e(number_format($p->harga_total)); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>

                
                <?php 
                    $jumlah = 0;
                ?>

                <div style="display: none;">
                    <?php if($request->submit == 'submit'): ?>
                        <?php $__currentLoopData = $filterPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($data->harga_total); ?></p>
                        <p><?php $jumlah += $data->harga_total ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($data->harga_total); ?></p>
                        <p><?php $jumlah += $data->harga_total ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>

                
                <div class="print-detail-harga" style="display: block; position: absolute; right: 0%;">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label for="harga_total" class="control-label col-md-4 col-sm-4 col-xs-4">Harga Total</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                    <input type="text" class="form-control" readonly value="<?php echo "$jumlah" ?>" placeholder="Harga Total" style="margin: 0 10px;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-11 col-md-10 col-xs-10"></div>
                <div class="col-lg-1 col-md-2 col-xs-2">
                    <a type="button" class="btn btn-success print" id="print" style="margin: 80px 0 20px; 0;"><p style="margin: 0; font-size: 12px;">Cetak</p></a>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/laporan/penjualan/index.blade.php ENDPATH**/ ?>