        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('home') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets/img/icon.jpg') ?>" width="35px"></img>
                </div>
                <div class="sidebar-brand-text mx-3">WEB SITU</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Looping Menu-->
            <div class="sidebar-heading">
                Home
            </div>
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('admin'); ?>">
                    <i class="fa fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Heading -->
            <div class="sidebar-heading">
                DATA SISTEM
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>">
                    <i class="far fa-fw fa-folder-open"></i>
                    <span>Kategori Barang</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('user/anggota'); ?>">
                    <i class="far fa-fw fa-user"></i>
                    <span>Data Anggota</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('buku/inces/'); ?>">
                    <i class="far fa-money-bill-alt"></i>
                    <span>Assets</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider mt-3">
            <!-- Heading -->
            <div class="sidebar-heading">
                Transaksi
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('buku'); ?>">
                    <i class="fa fa-fw fa-truck-loading"></i>
                    <span>Supplier</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

            <!-- Heading -->
            <div class="sidebar-heading">
                Laporan
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('Laporan/laporan_buku'); ?>">
                    <i class="fas fa-fw fa-print"></i>
                    <span>Laporan Data Barang</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider mt-3">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>