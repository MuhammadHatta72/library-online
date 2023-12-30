@extends('layouts.app')

@section('title', 'Detail Peminjaman')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Peminjaman</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Peminjaman</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-1">
                                    <label for="penulis" class="form-label"><b>Kode Peminjaman</b></label>
                                    <p>{{ $peminjaman->kode_peminjaman }}</p>
                                </div>
                                <div class="col-md-12 mb-3">
                                    @if($peminjaman->buku->gambar !== 'default.png')
                                        <img src="{{ asset('assets/buku/'.$peminjaman->buku->gambar) }}" alt="gambar buku" width="500" class="img-fluid">
                                    @else
                                        <img src="{{ asset('assets/img/news/img01.jpg') }}" alt="gambar buku" width="500" class="img-fluid">
                                    @endif
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="kode_buku" class="form-label"><b>Kode Buku</b></label>
                                    <p>{{ $peminjaman->buku->kode_buku }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="judul_buku" class="form-label"><b>Judul Buku</b></label>
                                    <p>{{ $peminjaman->buku->judul_buku }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="deskripsi" class="form-label"><b>Nama Pengunjung</b></label>
                                    <p>{{ $peminjaman->user->nama }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="tgl_kunjungan" class="form-label"><b>Tanggal Kunjungan</b></label>
                                    <p>{{ $peminjaman->tgl_kunjungan }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="tujuan" class="form-label"><b>Tujuan Kunjungan</b></label>
                                    <p>{{ $peminjaman->tujuan }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="tujuan" class="form-label"><b>Status</b></label>
                                    <p>{{ $peminjaman->status }}</p>
                                </div>
                                <div>
                                    <a href="{{ route('peminjaman.index') }}" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
