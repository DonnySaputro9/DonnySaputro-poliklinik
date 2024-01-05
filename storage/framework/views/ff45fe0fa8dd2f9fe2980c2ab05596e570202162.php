
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
                            <tr>
                                <td>1</td>
                                <td>Semprong</td>
                                <td>Panas</td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-edit"></i> Edit
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Semprong</td>
                                <td>Tipes</td>
                                <td>
                                    <a href="<?php echo e(route('editperiksa')); ?>" class="btn btn-warning">
                                        <i class="fas fa-stethoscope"></i> Periksa
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- Modal Edit -->
                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                        aria-hidden="true">
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
                                            <label for="editNamaPasien">Nama Pasien</label>
                                            <input type="text" class="form-control" id="editNamaPasien"
                                                name="editNamaPasien" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="editKeluhan">Keluhan</label>
                                            <input type="time" class="form-control" id="editKeluhan" name="editKeluhan"
                                                required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="button" class="btn btn-primary" onclick="submitEditForm()">Simpan
                                        Perubahan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rickyprimay/Downloads/aplikasi-poli/resources/views/memeriksa-pasien.blade.php ENDPATH**/ ?>