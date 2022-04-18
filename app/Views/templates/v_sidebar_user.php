        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa-solid fa-industry-windows"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Sistem Pelaporan <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href=<?= base_url(); ?>>
                    <i class="fa-solid fa-user"></i>
                    <span>Profile</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?= base_url(); ?>/barang/index">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kerusakan</span>
                </a>
                <a class="nav-link collapsed" href="<?= base_url(); ?>/barang/teknisi">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Penanganan Kerusakan</span>
                </a>
                <a class="nav-link collapsed" href="<?= base_url(); ?>/barang/status">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Status Penanganan</span>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <a class="nav-link collapsed" href="<?= base_url("login"); ?>">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">