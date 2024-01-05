<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <ul class="nav side-menu">

            <?php if(Auth::user()->level == 'admin'): ?>
                <li><a><i class="fa fa-home"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo e(route('data-pengguna.index')); ?>">Data Pengguna</a></li>
                        <li><a href="<?php echo e(route('data-satuan.index')); ?>">Data Satuan</a></li>
                        <li><a href="<?php echo e(route('data-kategori.index')); ?>">Data Kategori</a></li>
                        <li><a href="<?php echo e(route('data-barang.index')); ?>">Data Barang</a></li>
                        <li><a href="<?php echo e(route('data-pelanggan.index')); ?>">Data Pelanggan</a></li>
                        <li><a href="<?php echo e(route('data-suplier.index')); ?>">Data Suplier</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-edit"></i> Transaksi<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo e(route('pembelian.index')); ?>">Pembelian</a></li>
                        <li><a href="<?php echo e(route('penjualan.index')); ?>">Penjualan</a></li>
                        <li><a href="<?php echo e(route('pengiriman.index')); ?>">Pengiriman</a></li>
                        <li><a href="<?php echo e(route('piutang.index')); ?>">Piutang</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-desktop"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo e(route('laporanPembelian.index')); ?>">Laporan Pembelian</a></li>
                        <li><a href="<?php echo e(route('laporanPenjualan.index')); ?>">Laporan Penjualan</a></li>
                        <li><a href="<?php echo e(route('laporanBarang.index')); ?>">Laporan Barang</a></li>
                        <li><a href="<?php echo e(route('laporanPengiriman.index')); ?>">Laporan Pengiriman</a></li>
                    </ul>
                </li>

            <?php elseif(Auth::user()->level == 'kasir'): ?>
            
                <li><a><i class="fa fa-home"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo e(route('data-pelanggan.index')); ?>">Data Pelanggan</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-edit"></i> Transaksi<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo e(route('pembelian.index')); ?>">Pembelian</a></li>
                        <li><a href="<?php echo e(route('penjualan.index')); ?>">Penjualan</a></li>
                        <li><a href="<?php echo e(route('pengiriman.index')); ?>">Pengiriman</a></li>
                        <li><a href="<?php echo e(route('piutang.index')); ?>">Piutang</a></li>
                    </ul>
                </li>

                <li><a><i class="fa fa-desktop"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo e(route('laporanPembelian.index')); ?>">Laporan Pembelian</a></li>
                        <li><a href="<?php echo e(route('laporanPenjualan.index')); ?>">Laporan Penjualan</a></li>
                        <li><a href="<?php echo e(route('laporanBarang.index')); ?>">Laporan Barang</a></li>
                        <li><a href="<?php echo e(route('laporanPengiriman.index')); ?>">Laporan Pengiriman</a></li>
                    </ul>
                </li>
            
            <?php endif; ?>

        </ul>
    </div>
</div>

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small logout-style2">
    <form action="/logout" method="POST">
    <?php echo csrf_field(); ?>
        <button class="logout-style btn btn-danger" data-toggle="tooltip" data-placement="top" title="Logout" type="submit">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout
        </button>
    </form>
</div>
<!-- /menu footer buttons --><?php /**PATH D:\WORK\project\OrangeGrowTogether\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>