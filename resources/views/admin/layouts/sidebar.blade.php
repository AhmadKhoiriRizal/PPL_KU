<div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_settings-panel.html -->
    <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
            <i class="settings-close typcn typcn-times"></i>
            <p class="settings-heading">SIDEBAR SKINS</p>
            <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
            </div>
            <div class="sidebar-bg-options" id="sidebar-dark-theme">
                <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
            </div>
            <p class="settings-heading mt-2">HEADER SKINS</p>
            <div class="color-tiles mx-0 px-4">
                <div class="tiles success"></div>
                <div class="tiles warning"></div>
                <div class="tiles danger"></div>
                <div class="tiles info"></div>
                <div class="tiles dark"></div>
                <div class="tiles default"></div>
            </div>
        </div>
    </div>

    <!-- partial -->
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard')}}">
                    <i class="typcn typcn-device-desktop menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.datapendaftar')}}">
                    <i class="bi bi-person-badge"></i>
                    <span class="menu-title">Pendaftaran</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.kegiatan')}}">
                    <i class="bi bi-calendar-check"></i>
                    <span class="menu-title">Kegiatan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.anggota')}}">
                    <i class="bi bi-people-fill"></i>
                    <span class="menu-title">Anggota</span>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-card-text"></i>
                    <span class="menu-title">Cetak Kartu</span>
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.manajemen-akun')}}">
                    <i class="bi bi-shield-lock"></i>
                    <span class="menu-title">Manajemen Akun</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.profil')}}">
                    <i class="bi bi-person-square"></i>
                    <span class="menu-title">Profil</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="confirmLogout(event)" href="{{ route('logout') }}">
                    <i class="bi bi-power"></i>
                    <span class="menu-title">Keluar</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </nav>
