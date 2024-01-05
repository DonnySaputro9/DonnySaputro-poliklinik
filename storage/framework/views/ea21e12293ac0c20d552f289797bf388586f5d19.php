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
                    <button class="btn btn-primary float-right" data-toggle="modal" data-target="#tambahModal">
                        <i class="fas fa-plus"></i> Tambah
                    </button>
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
                                <th>No.</th>
                                <th>Nama Dokter</th>
                                <th>Hari</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($jadwal->dokter->nama); ?></td>
                                    <td><?php echo e($jadwal->hari); ?></td>
                                    <td><?php echo e($jadwal->jam_mulai); ?></td>
                                    <td><?php echo e($jadwal->jam_selesai); ?></td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#editModal<?php echo e($jadwal->id); ?>">
                                            <i class="fas fa-edit"></i> Edit
                                        </button>
                                        <button class="btn btn-danger" data-toggle="modal"
                                            data-target="#hapusModal<?php echo e($jadwal->id); ?>">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <!-- Modal Tambah -->
                    <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                        aria-labelledby="tambahModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="<?php echo e(route('jadwalperiksa.store')); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <div class="form-group">
                                            <label for="nama">Nama Dokter</label>
                                            <select class="form-control" id="nama" name="id_dokter" required>
                                                <?php $__currentLoopData = $dokters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($dokter->id); ?>"><?php echo e($dokter->nama); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="hari">Hari</label>
                                            <select class="form-control" id="hari" name="hari" required>
                                                <option value="Senin">Senin</option>
                                                <option value="Selasa">Selasa</option>
                                                <option value="Rabu">Rabu</option>
                                                <option value="Rabu">Kamis</option>
                                                <option value="Rabu">Jumat</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="jam_mulai">Jam Mulai</label>
                                            <input type="time" class="form-control" id="jam_mulai" name="jam_mulai"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jam_selesai">Jam Selesai</label>
                                            <input type="time" class="form-control" id="jam_selesai" name="jam_selesai"
                                                required>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan
                                    </button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal<?php echo e($jadwal->id); ?>" tabindex="-1" role="dialog"
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
                                            action="<?php echo e(route('jadwalperiksa.update', ['id' => $jadwal->id])); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <div class="form-group">
                                                <label for="nama">Nama Dokter</label>
                                                <select class="form-control" id="nama" name="id_dokter" required>
                                                    <?php $__currentLoopData = $dokters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dokter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($dokter->id); ?>"
                                                            <?php echo e($jadwal->dokter->id == $dokter->id ? 'selected' : ''); ?>>
                                                            <?php echo e($dokter->nama); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="hari">Hari</label>
                                                <select class="form-control" id="hari" name="hari" required>
                                                    <option value="Senin"
                                                        <?php echo e($jadwal->hari == 'Senin' ? 'selected' : ''); ?>>Senin</option>
                                                    <option value="Selasa"
                                                        <?php echo e($jadwal->hari == 'Selasa' ? 'selected' : ''); ?>>Selasa</option>
                                                    <option value="Rabu"
                                                        <?php echo e($jadwal->hari == 'Rabu' ? 'selected' : ''); ?>>Rabu</option>
                                                    <option value="Kamis"
                                                        <?php echo e($jadwal->hari == 'Kamis' ? 'selected' : ''); ?>>Kamis</option>
                                                    <option value="Jumat"
                                                        <?php echo e($jadwal->hari == 'Jumat' ? 'selected' : ''); ?>>Jumat</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="jam_mulai">Jam Mulai</label>
                                                <input type="time" class="form-control" id="jam_mulai"
                                                    name="jam_mulai" value="<?php echo e($jadwal->jam_mulai); ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jam_selesai">Jam Selesai</label>
                                                <input type="time" class="form-control" id="jam_selesai"
                                                    name="jam_selesai" value="<?php echo e($jadwal->jam_selesai); ?>" required>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan
                                            Perubahan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Hapus -->
                        <div class="modal fade" id="hapusModal<?php echo e($jadwal->id); ?>" tabindex="-1" role="dialog"
                            aria-labelledby="hapusModalLabel" aria-hidden="true">
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
                                        <form action="<?php echo e(route('jadwalperiksa.destroy', ['id' => $jadwal->id])); ?>"
                                            method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\joki\capstone_poliklinik\aplikasi-poli\resources\views/dokter/jadwal-periksa.blade.php ENDPATH**/ ?>