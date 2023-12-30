<nav class="navbar navbar-expand-lg navbar-dark px-1 px-lg-5 py-3 py-lg-0 d-flex justify-content-center">
    <a href="/" class="navbar-brand p-0">
        <h2 class="m-0"><img src="{{ asset('assets/img/logo_polinema.png') }}" style="width: 45px">  Akuntansi Polinema
        </h2>
    </a>
    <button class="navbar-toggler ms-auto my-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav m-auto py-0">
            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ request()->is('profil*') ? 'active' : '' }}"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside">Profil</a>
                <div class="dropdown-menu m-0">
                    <div class="dropend">
                        <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Program
                            Studi</a>
                        <div class="dropdown-menu">
                            <a href="/profil/d3-akuntansi" class="dropdown-item">D3 Akuntansi</a>
                            <a href="/profil/d4-akm" class="dropdown-item">D4 Akuntansi Manajemen</a>
                            <a href="/profil/d4-keu" class="dropdown-item">D4 Keuangan</a>
                            <a href="/profil/s2-sia" class="dropdown-item">S2 Sistem Informasi Akuntansi</a>
                        </div>
                    </div>
                    <a href="/profil/kode-etik" class="dropdown-item">Kode Etik Jurusan</a>
                </div>
            </div>
            <a href="/akademik" class="nav-item nav-link {{ request()->is('akademik') ? 'active' : '' }}">Akademik</a>
            <a href="/kemahasiswaan"
                class="nav-item nav-link {{ request()->is('kemahasiswaan') ? 'active' : '' }}">Kemahasiswaan</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ request()->is('portal*') ? 'active' : '' }} dropdown-toggle"
                    data-bs-toggle="dropdown">Internal Jurusan</a>
                <div class="dropdown-menu m-0">
                    <a href="/portal" class="dropdown-item">Portal</a>
                    <a href="/portal/survei-kegiatan" class="dropdown-item">Survei Kegiatan</a>
                </div>
            </div>
            <a href="/prestasi" class="nav-item nav-link {{ request()->is('prestasi') ? 'active' : '' }}">Prestasi</a>
            <div class="nav-item dropdown">
                <a href="#"
                    class="nav-link {{ request()->is('informasi-berita*') ? 'active' : '' }} dropdown-toggle"
                    data-bs-toggle="dropdown">Informasi & Berita</a>
                <div class="dropdown-menu m-0">
                    <a href="/informasi-berita" class="dropdown-item">Informasi & Berita</a>
                    <a href="/informasi-berita/kegiatan-jurusan" class="dropdown-item">Kegiatan Jurusan</a>
                    <a href="/informasi-berita/loker" class="dropdown-item">Lowongan Pekerjaan</a>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <a class="btn btn-primary py-2 px-4 ms-3" href="https://akuntansi.polinema.ac.id" target="_blank">
                LOGIN
        </a>
        </div>
    </div>
</nav>
