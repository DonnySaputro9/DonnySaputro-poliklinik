<?php $__env->startSection('content'); ?>
    
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Jadwal Periksa</h1>
          
        </div><!-- /.col -->
      </div><!-- /.row -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Jadwal Periksa</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Dokter</th>
                    <th>Hari</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Semprong</td>
                    <td>Selasa</td>
                    <td>17:00:00</td>
                    <td>17:15:00</td>
                    <td>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-danger" data-toggle="modal" data-target="#hapusModal">
                            <i class="fas fa-trash"></i> Hapus
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        
        <!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="editForm">
                  <?php echo csrf_field(); ?>
                  <div class="form-group">
                      <label for="editNamaDokter">Nama Dokter</label>
                      <input type="text" class="form-control" id="editNamaDokter" name="editNamaDokter" required>
                  </div>
                  <div class="form-group">
                      <label for="editHari">Hari</label>
                      <select class="form-control" id="editHari" name="editHari" required>
                          <option value="Senin">Senin</option>
                          <option value="Selasa">Selasa</option>
                          <option value="Rabu">Rabu</option>
                          <option value="Rabu">Kamis</option>
                          <option value="Rabu">Jumat</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="editJamMulai">Jam Mulai</label>
                      <input type="time" class="form-control" id="editJamMulai" name="editJamMulai" required>
                  </div>
                  <div class="form-group">
                      <label for="editJamSelesai">Jam Selesai</label>
                      <input type="time" class="form-control" id="editJamSelesai" name="editJamSelesai" required>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="button" class="btn btn-primary" onclick="submitEditForm()">Simpan Perubahan</button>
          </div>
      </div>
  </div>
</div>
        
        <!-- Modal Hapus -->
        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="hapusModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="hapusModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin akan menghapus data ini?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </div>        
        </div>
        <!-- /.card-body -->
      </div>
    </div><!-- /.container-fluid -->
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\joki\capstone_poliklinik\aplikasi-poli\resources\views/jadwal-periksa.blade.php ENDPATH**/ ?>