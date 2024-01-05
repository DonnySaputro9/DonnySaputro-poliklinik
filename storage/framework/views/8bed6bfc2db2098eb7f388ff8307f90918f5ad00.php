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
                        <h2>Laporan Barang</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive" style="margin-top: 10px;">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title">No.</th>
                                    <th class="column-title">Nama Barang</th>
                                    <th class="column-title">Kategori</th>
                                    <th class="column-title">Satuan</th>
                                    <th class="column-title">Harga Beli</th>
                                    <th class="column-title">Harga Grosir</th>
                                    <th class="column-title">Harga Ecer</th>
                                    <th class="column-title">Stok</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="even pointer">
                                        <td><?php echo e($loop->iteration); ?>.</td>
                                        <td><?php echo e($b->nama_barang); ?></td>
                                        <td><?php echo e($b->kategori->nama_kategori); ?></td>
                                        <td><?php echo e($b->satuan->nama_satuan); ?></td>
                                        <td>Rp. <?php echo e(number_format($b->harga_beli)); ?></td>
                                        <td>Rp. <?php echo e(number_format($b->harga_grosir)); ?></td>
                                        <td>Rp. <?php echo e(number_format($b->harga_ecer)); ?></td>
                                        <td><?php echo e($b->stok); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/laporan/barang/print.blade.php ENDPATH**/ ?>