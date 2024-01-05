<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="<?php echo e(asset('template-admin/dist/img/AdminLTELogo.png')); ?>" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Polikllinik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo e(asset('template-admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo e(auth()->user()->username); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <?php if(auth()->user()->role == 'dokter'): ?>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="<?php echo e(route('dokter.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('jadwalperiksa')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Jadwal Periksa
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('memeriksapasien')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Memeriksa Pasien
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('riwayatpasien')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Riwayat Pasien
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('profil')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Profil
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="/dokter/logout" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="logout-style btn btn-danger" data-toggle="tooltip" data-placement="top"
                                title="Logout" type="submit">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        <?php else: ?>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('dokter')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dokter
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('pasien')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Pasien
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('poli')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Poli
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(route('obat')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Obat
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form action="/admin/logout" method="POST">
                            <?php echo csrf_field(); ?>
                            <button class="logout-style btn btn-danger" data-toggle="tooltip" data-placement="top"
                                title="Logout" type="submit">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </nav>
        <?php endif; ?>


    </div>
    <!-- /.sidebar -->
</aside>


<?php /**PATH D:\KULIAH\joki\capstone_poliklinik\aplikasi-poli\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>