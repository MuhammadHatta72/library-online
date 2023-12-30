@extends('layouts.app')

@section('title', 'Edit Buku')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Buku</h1>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Buku</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" id="form-id" action="{{ route('buku.update', $book->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="kode_buku" class="form-label">Kode Buku<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('kode_buku') is-invalid @enderror"
                                            id="kode_buku" name="kode_buku" value="{{ $book->kode_buku }}" readonly />
                                        @error('kode_buku')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="judul_buku" class="form-label">Judul Buku<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('judul_buku') is-invalid @enderror"
                                            id="judul_buku" name="judul_buku" value="{{ $book->judul_buku }}" />
                                        @error('judul_buku')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="deskripsi" class="form-label">Deskripsi<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control @error('deskripsi') is-invalid @enderror"
                                            id="deskripsi" name="deskripsi" rows="3" style="height: 100px;">{{ $book->deskripsi }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="penulis" class="form-label">Penulis<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('penulis') is-invalid @enderror"
                                            id="penulis" name="penulis" value="{{ $book->penulis }}" />
                                        @error('penulis')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="penerbit" class="form-label">Penerbit<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('penerbit') is-invalid @enderror"
                                            id="penerbit" name="penerbit" value="{{ $book->penerbit }}" />
                                        @error('penerbit')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="tahun_terbit" class="form-label">Tahun Terbit<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('tahun_terbit') is-invalid @enderror"
                                            id="tahun_terbit" name="tahun_terbit" value="{{ $book->tahun_terbit }}"/>
                                        @error('tahun_terbit')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="kategori" class="form-label">Kategori<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('kategori') is-invalid @enderror"
                                            id="kategori" name="kategori" value="{{ $book->kategori }}" />
                                        @error('kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="lemari" class="form-label">Lemari<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('lemari') is-invalid @enderror"
                                            id="lemari" name="lemari" value="{{ $book->lemari }}" />
                                        @error('lemari')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="rak" class="form-label">Rak<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('rak') is-invalid @enderror"
                                            id="rak" name="rak" value="{{ $book->rak }}" />
                                        @error('rak')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="jumlah_buku" class="form-label">Jumlah Buku<span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control @error('jumlah_buku') is-invalid @enderror"
                                            id="jumlah_buku" name="jumlah_buku" value="{{ $book->jumlah_buku }}" />
                                        @error('jumlah_buku')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="gambar" class="form-label">Gambar<span
                                                class="text-danger">*</span></label>
                                        <input type="file" class="form-control @error('gambar') is-invalid @enderror"
                                            id="gambar" name="gambar" />
                                        @error('gambar')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <a href="{{ route('buku.index') }}" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-success">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
