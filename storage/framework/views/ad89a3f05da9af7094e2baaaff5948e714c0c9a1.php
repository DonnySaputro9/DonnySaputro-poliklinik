

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
          <!-- Form -->
          <form action="" method="POST">
            <?php echo csrf_field(); ?>

            <!-- Nama DOkter -->
            <div class="mb-3">
              <label for="nama_dokter" class="form-label">Nama dokter</label>
              <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" required>
            </div>

            <!-- Tanggal Periksa -->
            <div class="mb-3">
              <label for="alamat_dokter" class="form-label">Alamat Dokter</label>
              <input type="text" class="form-control" id="alamat_dokter" name="alamat_dokter" required>
            </div>

            <!-- Catatan -->
            <div class="mb-3">
              <label for="telp_dokter" class="form-label">No Telp</label>
              <input type="number" class="form-control" id="telp_dokter" name="telp_dokter" required>
            </div>

            <!-- Tombol Submit -->
            <button class="btn btn-primary">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rickyprimay/Downloads/aplikasi-poli/resources/views/profil.blade.php ENDPATH**/ ?>