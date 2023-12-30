<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm">
    <a href="/" class="navbar-brand p-0">
        <img src="{{ asset('assets/landing/img/logo.gif') }}" alt="logo" class="img-fluid my-3" style="width: 250px" />
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            @if(request()->is('all-library'))
            <a href="/" class="nav-item nav-link {{ request()->is('*/*') ? 'active' : '' }}">Beranda</a>
            <a href="/all-library" class="nav-item nav-link {{ request()->is('*all-library*') ? 'active' : '' }}">Perpus Digital</a>
            @else
            <a href="/" class="nav-item nav-link {{ request()->is('*/*') ? 'active' : '' }}">Beranda</a>
            <a href="#about-us" class="nav-item nav-link ">Tentang Kami</a>
            <a href="#news" class="nav-item nav-link">Informasi Terbaru</a>
            <a href="/all-library" class="nav-item nav-link {{ request()->is('*all-library*') ? 'active' : '' }}">Perpus Digital</a>
            @endif
        </div>
        @if(!auth()->user())
        <a href="{{ url('login') }}" class="btn btn-primary py-2 px-4 ms-3">LOGIN</a>
        @else
        <div class="dropdown">
            <a class="btn btn-primary dropdown-toggle py-2 px-4 ms-3" href="#" role="button" id="dropdownMenuLink"
                data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->nama }}
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('home') }}">Dashboard</a></li>
                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                <li>
                    <a href="#" class="dropdown-item has-icon text-danger"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="post">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        @endif

    </div>
</nav>
