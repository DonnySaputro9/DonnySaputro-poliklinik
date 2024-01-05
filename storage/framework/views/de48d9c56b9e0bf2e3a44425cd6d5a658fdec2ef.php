
<?php $__env->startSection('content'); ?>
    
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Data Satuan</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <div class="row">
                <div class="col-lg-6">
                    <a type="button" class="btn btn-success" href="<?php echo e(route('data-satuan.create')); ?>" style="margin-bottom: 20px;"><p style="margin: 0; font-size: 12px;">Tambah Data</p></a>
                </div>
                <div class="col-lg-3">
                    <div class="dropdown filter-style">
                        <button class="btn btn-default dropdown-toggle filter-style2" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Filter Data 
                        <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu filter-style3" aria-labelledby="dropdownMenu1">
                            <li><a href="<?php echo e(route('data-satuan.index', ['urutkan=asc'])); ?>">Nama Satuan A - Z</a></li>
                            <li><a href="<?php echo e(route('data-satuan.index', ['urutkan=desc'])); ?>">Nama Satuan Z - A</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <form action="<?php echo e(route('data-satuan.index')); ?>" method="GET">
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
                <table class="table table-striped jambo_table bulk_action" id="datatable">
                    <thead>
                    <tr class="headings">
                        <th class="column-title">No.</th>
                        <th class="column-title">Nama Satuan</th>
                        <th class="column-title">Aksi</th>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $satuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="even pointer">
                                <td><?php echo e($satuan->firstItem() + $key); ?>.</td>
                                <td><?php echo e($s->nama_satuan); ?></td>
                                <td>
                                    <a href="<?php echo e(route('data-satuan.edit', $s->id)); ?>" class="btn btn-primary btn-xs" type="button">Edit</a>
                                    <form action="<?php echo e(route('data-satuan.destroy', $s->id)); ?>" method="POST" style="display: inline;"> 
                                    <?php echo csrf_field(); ?> 
                                    <?php echo method_field('delete'); ?>
                                    <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin ?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </tbody>
                </table>
                <?php echo e($satuan->links()); ?>

            </div>
                   
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/satuan/index.blade.php ENDPATH**/ ?>