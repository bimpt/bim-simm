<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ $logo }}" alt="Logo Layanan BIM" class="brand-image img-circle">
      <span class="brand-text font-weight-light">{{ $nama_aplikasi }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-header">MASTER DATA</li>

                <li class="nav-header">TRANSAKSI</li>

                <!-- Pengaturan -->
                <li class="nav-header">PENGATURAN</li>
                <li class="nav-item">
                    <a href="{{ route('pengguna.index') }}" class="nav-link {{ $active == 'pengguna' ? 'active' : '' }}">
                        <i class="fa fa-user me-3"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('aplikasi.index') }}" class="nav-link {{ $active == 'aplikasi' ? 'active' : '' }}">
                        <i class="fa fa-cog me-3"></i>
                        <p>Aplikasi</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
