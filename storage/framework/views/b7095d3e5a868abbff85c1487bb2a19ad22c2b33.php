

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Profil Dokter</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Profil Dokter</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <!-- Form -->
                    <form action="<?php echo e(route('profil.update', ['id' => $dokter->id])); ?>" method="POST">
                        <?php echo csrf_field(); ?>

                        <!-- Nama DOkter -->
                        <div class="mb-3">
                            <label for="nama_pengguna" class="form-label">Nama dokter</label>
                            <input type="text" class="form-control" id="nama_pengguna" name="nama_pengguna"
                                value="<?php echo e($dokter->nama_pengguna); ?>" required>
                        </div>

                        <!-- Tanggal Periksa -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Dokter</label>
                            <input type="text" class="form-control" id="alamat" name="alamat"
                                value="<?php echo e($dokter->alamat); ?>" required>
                        </div>

                        <!-- Catatan -->
                        <div class="mb-3">
                            <label for="no_hp" class="form-label">No Telp</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp"
                                value="<?php echo e($dokter->no_hp); ?>" required>
                        </div>

                        <!-- Tombol Submit -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </form>
                    <!-- End Form -->
                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\joki\capstone_poliklinik\aplikasi-poli\resources\views/dokter/profil.blade.php ENDPATH**/ ?>