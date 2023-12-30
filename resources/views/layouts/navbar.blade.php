<form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
        <li>
            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</form>
<ul class="navbar-nav ms-auto">
    <li class="nav-item dropdown">
        <a href="#" data-bs-toggle="dropdown" class="nav-link dropdown-toggle">
            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" class="rounded-circle me-1"
                 style="width: 30px; height: 30px" />
            <span class="d-none d-lg-inline-block">
                    {{ auth()->user()->nama }}
            </span>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
            @section('navbar')
                <a href="{{ route('profile.edit') }}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
            @show
        </div>
    </li>
</ul>
