<aside id="sidebar-wrapper">
    <div class="sidebar-brand mt-1">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/pppbulutuban.png') }}" alt="logo" width="100" class="img-fluid">
        </a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm mt-1">
        <a href="{{ route('home') }}">
            <img src="{{ asset('assets/img/pppbulutuban.png') }}" alt="logo" width="70" class="img-fluid">
        </a>
    </div>
    <ul class="sidebar-menu mt-5">

        @section('sidebar')

            <li class="menu-header">Menu</li>
            <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link">
                    <i class="fas fa-poll-h"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown {{ request()->is('*buku', '*buku/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-book"></i><span>Buku</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link {{ request()->is('*buku/create') ? 'text-primary' : '' }}"
                            href="{{ route('buku.create') }}">Tambah Buku</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('*buku') ? 'text-primary' : '' }}"
                            href="{{ route('buku.index') }}">Daftar Buku</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ request()->is('*peminjaman', '*peminjaman/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-list"></i><span>Peminjaman</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link {{ request()->is('*peminjaman/create') ? 'text-primary' : '' }}"
                            href="{{ route('peminjaman.create') }}">Tambah Peminjaman</a>
                    </li>
                    <li>
                        <a class="nav-link {{ request()->is('*peminjaman') ? 'text-primary' : '' }}"
                            href="{{ route('peminjaman.index') }}">Daftar Peminjaman</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown {{ request()->is('*pengguna', '*pengguna/create') ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i><span>Pengguna</span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link {{ request()->is('*pengguna') ? 'text-primary' : '' }}"
                            href="{{ route('pengguna.index') }}">Daftar Pengguna</a>
                    </li>
                </ul>
            </li>
        @show
    </ul>

    <div class="mt-4 mb-4 p-2 hide-sidebar-mini">
        <a href="/" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
            <img src="{{ asset('assets/img/pppbulutuban.png') }}" alt="logo" width="30" class="img-fluid">
            PPP BULU TUBAN
        </a>
    </div>
</aside>
