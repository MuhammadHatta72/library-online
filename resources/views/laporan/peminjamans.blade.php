@extends('layouts.app')

@section('title', 'Daftar Peminjaman')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Peminjaman</h1>
        </div>

        @if ($errors->any())
            {{-- display Swal alert --}}
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
                            <h4>Data Peminjaman</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-right mb-3">
                                <a class="btn btn-success border-0 text-white createBtn" href="{{ route('cetak.peminjaman') }}" target="_blank">
                                    <i class="fas fa-print"></i>
                                    Print Peminjaman & Pengembalian Buku
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped" id="tablePaging">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Nama Buku</th>
                                            <th class="text-center">Nama Pengunjung</th>
                                            <th class="text-center">Tanggal Kunjungan</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjamans as $peminjaman)
                                            <tr class="text-center">
                                                <td>{{ $peminjaman->kode_peminjaman }}</td>
                                                <td>{{ $peminjaman->buku->judul_buku }}</td>
                                                <td>{{ $peminjaman->user->nama }}</td>
                                                <td>{{ $peminjaman->tgl_kunjungan }}</td>
                                                <td>
                                                    @if ($peminjaman->status == 'diproses')
                                                        <form action="{{ url('pengembalian/' . $peminjaman->id) }}" method="post"
                                                            onsubmit="processBook(event, 'process_{{ $peminjaman->id }}')" id="process_{{ $peminjaman->id }}">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-warning">
                                                                <i class="fas fa-hourglass-half"></i>
                                                                Diproses
                                                            </button>
                                                        </form>
                                                    @elseif ($peminjaman->status == 'dikembalikan')
                                                        <span class="badge badge-primary">Dikembalikan</span>
                                                    @else
                                                        <span class="badge badge-success">Dipinjam</span>
                                                    @endif
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
        </div>
    </section>
@endsection
