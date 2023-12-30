@extends('layouts.sidebar');

@section('sidebar')
    @parent
    {{-- <li class="nav-item dropdown {{ request()->is('**', '**') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-home"></i><span>Home</span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="">Tata Nlai</a>
            </li>
            <li>
                <a class="nav-link" href="">Struktur Organisasi</a>
            </li>
        </ul>
    </li> --}}
@endsection
