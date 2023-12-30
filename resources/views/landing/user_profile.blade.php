<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('assets/landing/img/pppbulutuban.png') }}">
    <title>UPT-Pelabuhan Perikanan Pantai Bulu</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- Favicon -->
    <link href="" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/landing/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/landing/lib/animate/animate.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/landing/css/style.css') }}" rel="stylesheet">
    
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/DataTables-1.13.6/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/DataTables-1.13.6/css/jquery.dataTables.css') }}">
</head>

<body>

        @if (session()->has('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                });
            </script>
        @endif

        @if (session()->has('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ session('error') }}',
                });
            </script>
        @endif

    <!-- Spinner Start -->
    <div id="spinner"
        class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    {{-- <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York,
                        USA</small> --}}
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>085156957434</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>ppp_bulu@jatimprov.go.id</small>
                </div>
            </div>
            {{-- <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        @include('landing.header')

        <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid wow zoomIn px-0" data-wow-delay="0.3s">
            <div class="card border-0">
                <img src="{{ asset('assets/landing/img/uptbulu.jpg') }}" class="qq card-img" alt="..."
                    style="max-height: 500px; filter: brightness(55%); object-fit:cover">
                <div class="tt card-img-overlay" style="top:45%">
                    <div class="card-title display-4 text-center fw-bold text-light">
                        User Profile
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Navbar & Carousel End -->


    <!-- Profile Start -->
    <div class="container-fluid position-relative py-5">
        <div class="container wow zoomIn p-5" data-wow-delay="0.3s">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Edit profile card-->
                    <div class="card">
                        <div class="card-header bg-whitesmoke">
                            <h4>Profile</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user-profile.update', auth()->user()->id) }}">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="nama">Nama</label>
                                        <input class="form-control @error('nama') is-invalid @enderror" id="nama" type="text" name="nama"
                                            value="{{ auth()->user()->nama }}"/>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" name="email"
                                            value="{{ auth()->user()->email }}"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="alamat">Alamat</label>
                                        <input class="form-control @error('alamat') is-invalid @enderror" id="alamat" type="text" name="alamat"
                                            value="{{ auth()->user()->alamat }}"/>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="no_hp">No. Telepon</label>
                                        <input class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" type="text" name="no_hp"
                                            value="{{ auth()->user()->no_hp }}"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="small mb-1" for="password">Password</label>
                                        <div class="d-flex align-items-center justify-content-end">
                                            <input class="form-control @error('password') is-invalid @enderror"
                                                id="password" type="password" name="password" />
                                            <span class="position-absolute px-1">
                                                <button class="eye btn border-0" type="button" onclick="showPW()">
                                                    <i class="fas fa-eye fs-6"></i>
                                                </button>
                                                <button class="eye-slash btn border-0 d-none" type="button"
                                                    onclick="hidePW()">
                                                    <i class="fas fa-eye-slash fs-6"></i>
                                                </button>
                                            </span>
                                        </div>
                                        <small class="text-muted ms-2">Kosongkan jika tidak ingin mengubah password</small>
                                        @error('password')
                                            <div class="invalid-feedback d-inline-flex">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <button class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


    {{-- display hero image --}}
    <div class="wow fadeInUp" id="blog" data-wow-delay="0.1s"
        style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
        <img class="img-fluid" src="{{ asset('assets/landing/img/WBS-PPPBULU.webp') }}" style="width: 100%" alt="">
    </div>


    <!-- Footer Start -->
    @include('landing.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top" style="display: inline;"><i
            class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/vendor/Jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/css/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/landing/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/landing/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/landing/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/landing/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/landing/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/DataTables-1.13.6/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/DataTables-1.13.6/js/jquery.dataTables.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/landing/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                "paging": true,
                "ordering": true,
                "info": true,
                "searching": true,
                "lengthChange": true,
                "autoWidth": true,
                "responsive": true,
            });
        });
    </script>

</body>

</html>
