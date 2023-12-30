<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ asset('assets/landing/img/pppbulutuban.png') }}">
    <title>UPT - Pelabuhan Perikanan Pantai Bulu</title>
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
    
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/DataTables-1.13.6/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/DataTables-1.13.6/css/jquery.dataTables.css') }}">

    <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/Jquery/jquery-3.6.0.min.js') }}"></script>
    
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
                        e-Katalog Perpustakaan
                    </div>
                    <div class="card-text text-center text-light">
                        <p class="lead">Layanan Katalog Buku PerpustakaanPelabuhan Perikanan Pantai Bulu Secara Online</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Navbar & Carousel End -->

    @if (session()->has('error'))
        <script type="text/javascript">
            Swal.fire({
                title: 'Error!',
                text: '<?= session()->get('error'); ?>',
                icon: 'error',
                confirmButtonText: 'OK'
            })
        </script>
    @endif

    @if (session()->has('success'))
        <script type="text/javascript">
            Swal.fire({
                title: 'Berhasil!',
                text: '<?= session()->get('success'); ?>',
                icon: 'success',
                confirmButtonText: 'OK'
            })
        </script>
    @endif


    {{-- Table Datatable --}}
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="text-dark mb-0">e-Katalog Perpustakaan</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode Buku</th>
                                    <th class="text-center">Judul Buku</th>
                                    <th class="text-center">Penulis</th>
                                    <th class="text-center">Penerbit</th>
                                    <th class="text-center">Tahun</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_books as $book)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $book->kode_buku }}</td>
                                    <td class="text-center">{{ $book->judul_buku }}</td>
                                    <td class="text-center">{{ $book->penulis }}</td>
                                    <td class="text-center">{{ $book->penerbit }}</td>
                                    <td class="text-center">{{ $book->tahun_terbit }}</td>
                                    <td class="text-center">{{ $book->jumlah_buku }}</td>
                                    <td class="d-flex justify-content-center gap-1 align-items-center">
                                        <button type="submit" class="btn btn-sm btn-primary pinjamBukuUser" data-id="{{ $book->id }}">
                                            <i class="bi bi-arrow-right"></i> Pinjam
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- make modal --}}
    <div class="modal fade" id="viewPinjamUser" tabindex="-1" data-backdrop="static"
         data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pinjam Buku</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <form action="{{ route('pinjam.bukuuser') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id_book" id="id_book">
                            <input type="hidden" name="id_user" id="id_user" value="{{ Auth::user()->id ?? '' }}">
                            <div class="col-md-12 mb-3">
                                <label for="tgl_kunjungan" class="mb-2">Tanggal Kunjungan</label>
                                <input type="text" id="tgl_kunjungan" name="tgl_kunjungan" class="form-control" value="{{ date('d-m-Y') }}" readonly>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="tgl_kunjungan" class="mb-2">Tujuan Kunjungan</label>
                                <textarea name="tujuan_kunjungan" id="tujuan_kunjungan" class="form-control" cols="30" rows="5"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type="submit" class="btn btn-primary btn-block">Pinjam</button>
                            </div>
                        </form>
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

            $('.pinjamBukuUser').click(function() {
                let auth = "{{ Auth::user() }}";
                if(auth == false){
                    Swal.fire({
                        title: 'Perhatian!',
                        text: 'Silahkan login terlebih dahulu untuk melakukan peminjaman buku',
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    })
                }else{
                    let id_book = $(this).data('id');
                    $('#viewPinjamUser').modal('show');
                    $('#id_book').val(id_book);
                }
            });
            
        });
    </script>

</body>

</html>
