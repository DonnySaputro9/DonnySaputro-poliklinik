
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Memeriksa Pasien</h1>

                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Memeriksa Pasien</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No. Urut</th>
                                <th>Nama Pasien</th>
                                <th>Keluhan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $daftarPolis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daftarPoli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($daftarPoli->no_antrian); ?></td>
                                    <td><?php echo e($daftarPoli->pasien->nama); ?></td>
                                    <td><?php echo e($daftarPoli->keluhan); ?></td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#editModal<?php echo e($daftarPoli->id); ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <a href="<?php echo e(route('editperiksa', $daftarPoli->id)); ?>" class="btn btn-warning">
                                            <i class="fas fa-stethoscope"></i> Periksa
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php $__currentLoopData = $daftarPolis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $daftarPoli): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal<?php echo e($daftarPoli->id); ?>" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="editForm"
                                            action="<?php echo e(route('memeriksapasien.update', ['id' => $daftarPoli->id])); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="nama">Nama Pasien</label>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                    required value="<?php echo e($daftarPoli->pasien->nama); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="keluhan">Keluhan</label>
                                                <input type="text" class="form-control" id="keluhan" name="keluhan"
                                                    required value="<?php echo e($daftarPoli->keluhan); ?>">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan
                                            Perubahan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\joki\capstone_poliklinik\aplikasi-poli\resources\views/dokter/memeriksa-pasien.blade.php ENDPATH**/ ?>