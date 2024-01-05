<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Orange Grow Together</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('template-admin/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('template-admin/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('template-admin/build/css/custom.min.css')); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
        <div class="right_col" style="margin: 0 0 0 0;" role="main">
            <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Laporan Pembelian</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="form-horizontal form-label-left">
                        <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="dari_tanggal" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Dari Tanggal</label>
                                <div class="col-md-4 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                                    <input type="date" class="form-control" id="dari_tanggal" name="dari_tanggal" value="<?php echo e($dari_tanggal); ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sampai_tanggal" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Sampai Tanggal</label>
                                <div class="col-md-4 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                                    <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal" value="<?php echo e($sampai_tanggal); ?>">
                                </div>
                            </div>
                        </form>
                        <div class="table-responsive" style="margin-top: 30px;">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title">No.</th>
                                    <th class="column-title">Tanggal</th>
                                    <th class="column-title">Kode Transaksi</th>
                                    <th class="column-title">Nama Barang</th>
                                    <th class="column-title">Harga Barang</th>
                                    <th class="column-title">Jumlah Barang</th>
                                    <th class="column-title">Sub Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php if($request->submit == 'submit'): ?>
                                    <?php $__currentLoopData = $filterPembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="even pointer"> 
                                        <td><?php echo e($loop->iteration); ?>.</td>
                                        <td><?php echo e($p->tanggal); ?></td>
                                        <td><?php echo e($p->kodePembelian->kode_pembelian); ?></td>
                                        <td><?php echo e($p->barang->nama_barang); ?></td>
                                        <td>Rp. <?php echo e(number_format($p->barang->harga_beli)); ?></td>
                                        <td><?php echo e(number_format($p->jumlah_barang)); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                        <td>Rp. <?php echo e(number_format($p->sub_total)); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                    <?php $__currentLoopData = $pembelian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="even pointer"> 
                                            <td><?php echo e($loop->iteration); ?>.</td>
                                            <td><?php echo e($p->tanggal); ?></td>
                                            <td><?php echo e($p->kodePembelian->kode_pembelian); ?></td>
                                            <td><?php echo e($p->barang->nama_barang); ?></td>
                                            <td>Rp. <?php echo e(number_format($p->barang->harga_beli)); ?></td>
                                            <td><?php echo e(number_format($p->jumlah_barang)); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                            <td>Rp. <?php echo e(number_format($p->sub_total)); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
      </div>
    </div>

    
    <script>
        window.print();
    </script>    

    <!-- jQuery -->
    <script src="<?php echo e(asset('template-admin/vendors/jquery/dist/jquery.min.js')); ?>"></script>
    
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('template-admin/vendors/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('template-admin/build/js/custom.min.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script'); ?>
	
  </body>
</html>
<?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/laporan/pembelian/print.blade.php ENDPATH**/ ?>