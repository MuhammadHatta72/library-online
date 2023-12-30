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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/landing/css/style.css') }}" rel="stylesheet">
</head>

<body>
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

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('assets/landing/img/slide1.webp') }}" alt="Image 1">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Literasi Digital</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">UPT Pelabuhan Perikanan Pantai Bulu</h1>
                            <a href="#about-us" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Tentang Kami</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('assets/landing/img/slide2.webp') }}" alt="Image 2">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Program Magang Kerja</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">UPT Pelabuhan Perikanan Pantai Bulu</h1>
                            <a href="#about-us" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Tentang Kami</a>
                            {{-- <a href=""
                                class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contact Us</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" id="about-us" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 900px;">
                <h5 class="fw-bold text-primary text-uppercase">Tentang Kami</h5>
                <h1 class="mb-0">UPT PELABUHAN PERIKANAN PANTAI BULU</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-12">
                    <p class="text-center">UPT Pelabuhan Perikanan Pantai Bulu-Tuban sebagai Unit Pelaksana Teknis Dinas Perikanan dan Kelautan Provinsi Jawa  Timur diharapkan menjadi pusat kegiatan produksi, pemasaran, pengelolaan hasil perikanan serta mampu mengadakan pembinaan intensif terhadap usaha perikanan dan pembinaan masyarakat perikanan, sehingga dapat menunjang tercapainya pembangunan perikanan tangkap dan menumbuhkembangkan perekonomian masyarakat secara berkesinambungan.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->

    <!-- Blog Start -->
    <div class="container-fluid wow fadeInUp" id="news" data-wow-delay="0.1s"
        style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Informasi Terkini</h5>
                <h1 class="mb-0">Info Terbaru Pelabuhan</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s"
                    style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/landing/img/blog-1.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s"
                    style="visibility: hidden; animation-delay: 0.6s; animation-name: none;">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/landing/img/blog-2.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s"
                    style="visibility: hidden; animation-delay: 0.9s; animation-name: none;">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{ asset('assets/landing/img/blog-3.jpg') }}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4"
                                href="">Web Design</a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>
                            </div>
                            <h4 class="mb-3">How to build a website</h4>
                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>
                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->

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

    @stack('customJS')

    <!-- Template Javascript -->
    <script src="{{ asset('assets/landing/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>

</body>

</html>
