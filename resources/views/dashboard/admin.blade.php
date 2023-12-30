@extends("layouts.app")

@section("title", "Dashboard Admin")

@section("sidebar")
    @include("layouts.sidebar_admin")
@endsection

@section("content")
    <section class="section">
        <div class="section-header">
            <h1>Selamat Datang! {{ auth()->user()->nama }}</h1>
        </div>

        @php
            if (\Illuminate\Support\Facades\Hash::check("password", auth()->user()->password)) {
                echo "<script>
                    Swal.fire({
                            icon: 'warning',
                            title: 'Peringatan',
                            text: 'Silahkan ubah password anda terlebih dahulu',
                            showCancelButton: true, // Menampilkan tombol batal
                            confirmButtonText: 'Ubah Password Sekarang', // Label tombol konfirmasi
                            cancelButtonText: 'Ubah Nanti', // Label tombol batal
                        })
                        .then((result) => {
                            if (result.isConfirmed) {
                                // Redirect ke rute profil untuk mengubah password
                                window.location.href = '" . route('profile.edit') . "';
                            }
                        });
                </script>";
            }
        @endphp

        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 mb-4 shadow p-3">
                    <img src="{{ asset('assets/img/slide1.webp') }}" style="width: 100%;" alt="carousel" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-4 mb-4">
                    <div class="card bg-warning text-white">
                        <div class="card-body py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div>
                                        <h5>Arsip Travel</h5>
                                    </div>
                                    <div class="h4 font-weight-600 text-white"></div>
                                </div>
                                <i class="fas fa-envelope-open-text" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer py-2 d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="">
                                <h6>Detail</h6>
                            </a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-4 mb-4">
                    <div class="card bg-info text-white">
                        <div class="card-body py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div>
                                        <h5>Arsip Expen Report</h5>
                                    </div>
                                    <div class="h4 font-weight-600 text-white"></div>
                                </div>
                                <i class="fas fa-envelope-open-text" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer py-2 d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="">
                                <h6>Detail</h6>
                            </a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-4 mb-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body py-3">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div>
                                        <h5>Arsip Advance</h5>
                                    </div>
                                    <div class="h4 font-weight-600 text-white"></div>
                                </div>
                                <i class="fas fa-envelope-open-text" style="font-size:xx-large"></i>
                            </div>
                        </div>
                        <div class="card-footer py-2 d-flex align-items-center justify-content-between small shadow-dark">
                            <a class="text-white stretched-link" href="">
                                <h6>Detail</h6>
                            </a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
