
<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Riwayat Pasien</h1>

                </div><!-- /.col -->
            </div><!-- /.row -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Riwayat Pasien</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pasien</th>
                                <th>Alamat</th>
                                <th>No. KTP</th>
                                <th>No. Telepon</th>
                                <th>No. RM</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Semprong</td>
                                <td>Semarang</td>
                                <td>12345678</td>
                                <td>12345678</td>
                                <td>12345678</td>
                                <td>
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                        <i class="fas fa-eye"></i> Detail Riwayat Periksa
                                    </button>
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
                                    <h5 class="modal-title" id="editModalLabel">Detail Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="editForm">
                                        <div class="form-group">
                                            <label>Tanggal Periksa</label>
                                            <input type="text" class="form-control" readonly required
                                                value="2023-12-9 11:24:00">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Pasien</label>
                                            <input type="text" class="form-control" readonly required
                                                value="Semprong">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Dokter</label>
                                            <input type="text" class="form-control" readonly required
                                                value="Yusup">
                                        </div>
                                        <div class="form-group">
                                            <label>Keluhan</label>
                                            <input type="text" class="form-control" readonly required
                                                value="Panas">
                                        </div>
                                        <div class="form-group">
                                          <label>Keluhan</label>
                                          <textarea class="form-control" readonly required>Periksa Lagi minggu depan</textarea>
                                        </div>
                                        <div class="form-group">
                                          <label>Obat</label>
                                          <textarea class="form-control" readonly required>Antimo 1kg, tolak angin 5sachet</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Biaya</label>
                                            <input type="text" class="form-control" readonly required
                                                value="Rp. 215.000,00">
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

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rickyprimay/Downloads/aplikasi-poli/resources/views/riwayat-pasien.blade.php ENDPATH**/ ?>