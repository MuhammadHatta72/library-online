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
    
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/DataTables-1.13.6/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/DataTables-1.13.6/css/jquery.dataTables.css') }}">
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

        <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid wow zoomIn px-0" data-wow-delay="0.3s">
            <div class="card border-0">
                <img src="{{ asset('assets/landing/img/uptbulu.jpg') }}" class="qq card-img" alt="..."
                    style="max-height: 500px; filter: brightness(55%); object-fit:cover">
                <div class="tt card-img-overlay" style="top:45%">
                    <div class="card-title display-4 text-center fw-bold text-light">
                        Dashboard
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Navbar & Carousel End -->


    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title section-title-sm position-relative pb-3 mb-4">
                        <h3 class="text-dark mb-0">Peminjaman Buku</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped" id="table">
                            <thead>
                                <tr class="text-center">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode Peminjaman</th>
                                    <th class="text-center">Kode Buku</th>
                                    <th class="text-center">Judul Buku</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($peminjamans as $pinjaman)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $pinjaman->kode_peminjaman }}</td>
                                    <td class="text-center">{{ $pinjaman->buku->kode_buku }}</td>
                                    <td class="text-center">{{ $pinjaman->buku->judul_buku }}</td>
                                    <td class="text-center">
                                        @if ($pinjaman->status == 'diproses')
                                            <span class="badge bg-warning text-dark">{{ $pinjaman->status }}</span>
                                        @elseif ($pinjaman->status == 'dikembalikan')
                                            <span class="badge bg-primary">{{ $pinjaman->status }}</span>
                                        @else
                                            <span class="badge bg-success">{{ $pinjaman->status }}</span>
                                        @endif
                                    </td>
                                    <td class="d-flex justify-content-center gap-1 align-items-center">
                                        <button type="submit" class="btn btn-sm btn-primary detailPinjamUser" data-id="{{ $pinjaman->id }}">
                                            <i class="fas fa-eye"></i> Detail
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
                    <h5 class="modal-title">Detail Pinjam</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-12 mb-1">
                            <label for="penulis" class="form-label"><b>Kode Peminjaman</b></label>
                            <p id="kode_peminjaman"></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="gambar_buku" class="form-label"><b>Gambar Buku</b></label> <br>
                            <img src="" alt="gambar buku" width="500" class="img-fluid" id="gambar_buku">
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="kode_buku" class="form-label"><b>Kode Buku</b></label>
                            <p id="kode_buku"></p>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="judul_buku" class="form-label"><b>Judul Buku</b></label>
                            <p id="judul_buku"></p>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="tgl_kunjungan" class="form-label"><b>Tanggal Kunjungan</b></label>
                            <p id="tgl_kunjungan"></p>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="tujuan" class="form-label"><b>Tujuan Kunjungan</b></label>
                            <p id="tujuan"></p>
                        </div>
                        <div class="col-md-12 mb-1">
                            <label for="tujuan" class="form-label"><b>Status</b></label>
                            <p id="status"></p>
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

        $('.detailPinjamUser').click(function() {
            let id = $(this).data('id');
            console.log(id);
            $.ajax({
                url: "{{ url('pinjam-buku') }}/" + id,
                type: "GET",
                success: function(response) {
                    let data = response.data;
                    $('#kode_peminjaman').text(data.peminjaman.kode_peminjaman);
                    if(data.buku.gambar === 'default.png') {
                        $('#gambar_buku').attr('src', "{{ asset('assets/img/news/img01.jpg') }}");
                    } else {
                        $('#gambar_buku').attr('src', "{{ asset('assets/buku') }}/" + data.buku.gambar);
                    }
                    $('#kode_buku').text(data.buku.kode_buku);
                    $('#judul_buku').text(data.buku.judul_buku);
                    $('#tgl_kunjungan').text(data.peminjaman.tgl_kunjungan);
                    $('#tujuan').text(data.peminjaman.tujuan);
                    $('#status').text(data.peminjaman.status);
                    $('#viewPinjamUser').modal('show');
                }
            });    
        });
    </script>

</body>

</html>
