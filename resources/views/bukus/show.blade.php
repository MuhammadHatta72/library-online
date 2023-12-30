@extends('layouts.app')

@section('title', 'Detail Buku')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Detail Buku</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Buku</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    @if($buku->gambar !== 'default.png')
                                        <img src="{{ asset('assets/buku/'.$buku->gambar) }}" alt="gambar buku" width="500" class="img-fluid">
                                    @else
                                        <img src="{{ asset('assets/img/news/img01.jpg') }}" alt="gambar buku" width="500" class="img-fluid">
                                    @endif
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="kode_buku" class="form-label"><b>Kode Buku</b></label>
                                    <p>{{ $buku->kode_buku }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="judul_buku" class="form-label"><b>Judul Buku</b></label>
                                    <p>{{ $buku->judul_buku }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="deskripsi" class="form-label"><b>Deskripsi</b></label>
                                    <p>{{ $buku->deskripsi }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="penulis" class="form-label"><b>Penulis</b></label>
                                    <p>{{ $buku->penulis }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="penerbit" class="form-label"><b>Penerbit</b></label>
                                    <p>{{ $buku->penerbit }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="tahun_terbit" class="form-label"><b>Tahun Terbit</b></label>
                                    <p>{{ $buku->tahun_terbit }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="kategori" class="form-label"><b>Kategori</b></label>
                                    <p>{{ $buku->kategori }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="lemari" class="form-label"><b>Lemari</b></label>
                                    <p>{{ $buku->lemari }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="rak" class="form-label"><b>Rak</b></label>
                                    <p>{{ $buku->rak }}</p>
                                </div>
                                <div class="col-md-12 mb-1">
                                    <label for="jumlah_buku" class="form-label"><b>Jumlah Buku</b></label>
                                    <p>{{ $buku->jumlah_buku }}</p>
                                </div>                    
                                <div>
                                    <a href="{{ route('buku.index') }}" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
