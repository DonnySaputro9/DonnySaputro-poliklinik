<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Orange Grow Together</title>

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('template-admin/build/css/custom.min.css')); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="clearfix"></div>

            <br />


          </div>
        </div>


        <!-- page content -->
        <div class="right_col" role="main">
          
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
                                <div class="col-md-4 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                                    <input type="date" class="form-control" id="dari_tanggal" name="dari_tanggal" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sampai_tanggal" class="col-md-2 col-sm-3 col-xs-12" style="padding: 10px 0 0 10px;">Sampai Tanggal</label>
                                <div class="col-md-4 col-sm-9 col-xs-12" style="padding: 0 50px 0 0;">
                                    <input type="date" class="form-control" id="sampai_tanggal" name="sampai_tanggal" value="">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit" value="submit" style="margin: 20px 0 0 10px;"><p style="margin: 0; font-size: 12px;">Filter</p></button>
                        </form>
            
                        <div class="table-responsive" style="margin-top: 30px;">
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
                                    
                                    <?php
                                    use App\Models\Penjualan;
                                    
                                    $penjualan = Penjualan::all();
                                    ?>
                                
                                    <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="even pointer">
                                            <td><?php echo e($loop->iteration); ?>.</td>
                                            <td><?php echo e($p->tanggal->format('d-m-Y')); ?></td>
                                            <td><?php echo e($p->kodePenjualan->kode_penjualan); ?></td>
                                            <td><?php echo e($p->barang->nama_barang); ?></td>
                                            <td><?php echo e($p->jenis); ?></td>
                                            
                                            <?php if($p->jenis == 'grosir'): ?>
                                                <td>Rp. <?php echo e(number_format($p->barang->harga_grosir)); ?></td>
                                            <?php else: ?>
                                                <td>Rp. <?php echo e(number_format($p->barang->harga_ecer)); ?></td>
                                            <?php endif; ?>
                                            
                                            <td><?php echo e(number_format($p->jumlah_barang)); ?> <?php echo e($p->barang->satuan->nama_satuan); ?></td>
                                            <td>Rp. <?php echo e(number_format($p->sub_total)); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                                </tbody>
                            </table>
                        </div>
            
                        
                        <a type="button" class="btn btn-success" href="" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Cetak</p></a>
            
                    </div> 
                </div>
            </div>

        </div>
        <!-- /page content -->

      </div>
    </div>

	
  </body>
</html>
<?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/invoice.blade.php ENDPATH**/ ?>