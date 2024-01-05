<?php $__env->startSection('content'); ?>
    
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Periksa Pasien</h1>
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Periksa Pasien</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <!-- Form -->
          <form action="" method="POST">
            <?php echo csrf_field(); ?>

            <!-- Nama Pasien -->
            <div class="mb-3">
              <label for="nama_pasien" class="form-label">Nama Pasien</label>
              <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" required>
            </div>

            <!-- Tanggal Periksa -->
            <div class="mb-3">
              <label for="tanggal_periksa" class="form-label">Tanggal Periksa</label>
              <input type="date" class="form-control" id="tanggal_periksa" name="tanggal_periksa" required>
            </div>

            <!-- Catatan -->
            <div class="mb-3">
              <label for="catatan" class="form-label">Catatan</label>
              <input type="text" class="form-control" id="catatan" name="catatan" required>
            </div>

            <!-- Obat -->
            <div class="mb-3">
              <label for="obat" class="form-label">Obat</label>
              <textarea class="form-control" id="obat" name="obat" rows="3" required></textarea>
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rickyprimay/Downloads/aplikasi-poli/resources/views/edit-periksa.blade.php ENDPATH**/ ?>