
<?php $__env->startSection('content'); ?>
    
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
                        <th class="column-title">Harga Beli</th>
                        <th class="column-title">Harga Grosir</th>
                        <th class="column-title">Harga Ecer</th>
                        <th class="column-title">Stok</th>
                        <th class="column-title">Satuan</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($loop->iteration); ?>.</td>
                                <td><?php echo e($b->nama_barang); ?></td>
                                <td><?php echo e($b->kategori->nama_kategori); ?></td>
                                <td>Rp. <?php echo e(number_format($b->harga_beli)); ?></td>
                                <td>Rp. <?php echo e(number_format($b->harga_grosir)); ?></td>
                                <td>Rp. <?php echo e(number_format($b->harga_ecer)); ?></td>
                                <td><?php echo e($b->stok); ?></td>
                                <td><?php echo e($b->satuan->nama_satuan); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-lg-11 col-md-10 col-xs-10"></div>
                <div class="col-lg-1 col-md-2 col-xs-2">
                    <a type="button" class="btn btn-success print" id="print" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Cetak</p></a>
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
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/laporan/barang/index.blade.php ENDPATH**/ ?>