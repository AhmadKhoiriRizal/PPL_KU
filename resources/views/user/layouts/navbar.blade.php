<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <div id="logo" class="one_quarter first">
            <h1><a href="{{ route('beranda') }}"><img
                        src="{{ asset('dashboard/assets/img/logo_saka.png') }}"><span>S</span>abhara<span>M</span>ayong</a>
            </h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('sejarah') ? 'active' : '' }}" href="{{ route('sejarah') }}">Sejarah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('pendaftaran') ? 'active' : '' }}" href="{{ route('pendaftaran') }}">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('kontak') ? 'active' : '' }}" href="{{ route('kontak') }}">Kontak</a>
                </li> --}}
            </ul>
            <div class="ms-auto w-auto">
                <div class="header-social d-flex align-items-center gap-2">
                    @if (Auth::check())
                        <!-- Dropdown untuk user login (tanpa tombol) -->
                        <div class="dropdown">
                            <div class="d-flex align-items-center gap-2 text-white dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" role="button" aria-expanded="false" style="cursor: pointer;">
                                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="9" r="3" stroke="#fff" stroke-width="1.5"></circle>
                                    <path d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12
                                            C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786
                                            2.48697 8.47087 3.33782 7"
                                        stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                                <span class="fw-semibold">{{ Auth::user()->name }}</span>
                            </div>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                {{-- <li><a class="dropdown-item" href="{{ route('profile') }}">Profil</a></li> --}}
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Keluar
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <!-- Untuk tamu (belum login) -->
                        <a href="{{ route('login') }}" title="Masuk ke akun" class="d-flex align-items-center gap-2 text-white text-decoration-none">
                            <svg viewBox="0 0 24 24" width="20" height="20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="9" r="3" stroke="#fff" stroke-width="1.5"></circle>
                                <path d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                                <path d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12
                                        C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786
                                        2.48697 8.47087 3.33782 7"
                                    stroke="#fff" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            <span class="fw-semibold">Daftar</span>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</nav>
