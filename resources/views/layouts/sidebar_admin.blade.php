@extends('layouts.sidebar');

@section('sidebar')
    @parent
    <li class="nav-item dropdown {{ request()->is('list_buku', 'list_pengguna', 'list_peminjaman') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown">
            <i class="fas fa-newspaper"></i> <span>Laporan</span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="nav-link" href="{{ route('list_buku') }}">Daftar Buku</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('list_pengguna') }}">Daftar Pengguna</a>
            </li>
            <li>
                <a class="nav-link" href="{{ route('list_peminjaman') }}">Daftar Peminjaman</a>
            </li>
        </ul>
    </li>
@endsection
