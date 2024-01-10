@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Buku</h1>
        </div>

        @if ($errors->any())
            {{-- display swalaert --}}
            <script>
                Swal.fire({
                    title: 'Error!',
                    text: '<?= implode("\n", $errors->all()); ?>',
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

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Buku</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-right mb-3">
                                <a class="btn btn-success border-0 text-white createBtn" href="{{ route('cetak.buku') }}" target="_blank">
                                    <i class="fas fa-print"></i>
                                    Print Buku
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped" id="tablePaging">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Kateogri</th>
                                            <th class="text-center">Jumlah Buku</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_books as $book)
                                            <tr class="text-center">
                                                <td>{{ $book->kode_buku }}</td>
                                                <td>{{ $book->judul_buku }}</td>
                                                <td>{{ $book->kategori }}</td>
                                                <td>{{ $book->jumlah_buku }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
