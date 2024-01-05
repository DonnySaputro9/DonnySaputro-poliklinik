
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
                            <?php $__currentLoopData = $detailPeriksas->groupBy('id_periksa'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idPeriksa => $groupedDetailPeriksas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td><?php echo e($groupedDetailPeriksas[0]->periksa->daftarPoli->pasien->nama); ?></td>
                                    <td><?php echo e($groupedDetailPeriksas[0]->periksa->daftarPoli->pasien->alamat); ?></td>
                                    <td><?php echo e($groupedDetailPeriksas[0]->periksa->daftarPoli->pasien->no_ktp); ?></td>
                                    <td><?php echo e($groupedDetailPeriksas[0]->periksa->daftarPoli->pasien->no_hp); ?></td>
                                    <td><?php echo e($groupedDetailPeriksas[0]->periksa->daftarPoli->pasien->no_rm); ?></td>
                                    <td>
                                        <button class="btn btn-primary" data-toggle="modal"
                                            data-target="#editModal<?php echo e($idPeriksa); ?>">
                                            <i class="fas fa-eye"></i> Detail Riwayat Periksa
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <?php $__currentLoopData = $detailPeriksas->groupBy('id_periksa'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idPeriksa => $groupedDetailPeriksas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal<?php echo e($idPeriksa); ?>" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel" aria-hidden="true">
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
                                                    value="<?php echo e($groupedDetailPeriksas[0]->created_at); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Pasien</label>
                                                <input type="text" class="form-control" readonly required
                                                    value="<?php echo e($groupedDetailPeriksas[0]->periksa->daftarPoli->pasien->nama); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Dokter</label>
                                                <input type="text" class="form-control" readonly required
                                                    value="<?php echo e($groupedDetailPeriksas[0]->periksa->daftarPoli->jadwal->dokter->nama); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Keluhan</label>
                                                <input type="text" class="form-control" readonly required
                                                    value="<?php echo e($groupedDetailPeriksas[0]->periksa->daftarPoli->keluhan); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Catatan</label>
                                                <textarea class="form-control" readonly required><?php echo e($groupedDetailPeriksas[0]->periksa->catatan); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Obat</label>
                                                <div id="selectedObats" class="border overflow-auto p-2"
                                                    style="height: 100px;">
                                                    <?php $__currentLoopData = $groupedDetailPeriksas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detailPeriksa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php echo e($detailPeriksa->obat->nama_obat); ?>

                                                        (<?php echo e($detailPeriksa->obat->kemasan); ?>)
                                                        - Rp. <?php echo e($detailPeriksa->obat->harga); ?>

                                                        <?php if(!$loop->last): ?>
                                                            <br>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Jasa</label>
                                                <input type="text" class="form-control" readonly required value="150000">
                                            </div>
                                            <div class="form-group">
                                                <label>Total Biaya (Jasa + Obat)</label>
                                                <input type="text" class="form-control" readonly required
                                                    value="Rp <?php echo e($groupedDetailPeriksas[0]->periksa->biaya); ?>">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KULIAH\joki\capstone_poliklinik\aplikasi-poli\resources\views/dokter/riwayat-pasien.blade.php ENDPATH**/ ?>