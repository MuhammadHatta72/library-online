@extends('layouts.app')

@section('title', 'Tambah Peminjaman')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Peminjaman</h1>
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
                            <h4>Data Peminjaman</h4>
                        </div>
                        <div class="card-body">
                            <form method="post" id="form-id" action="{{ route('peminjaman.store') }}"
                                enctype="multipart/form-data">
                                @csrf
                                @method('post')
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="kode_peminjaman" class="form-label">Kode Peminjaman<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('kode_peminjaman') is-invalid @enderror"
                                            id="kode_peminjaman" name="kode_peminjaman" value="{{ old('kode_peminjaman') ? old('kode_peminjaman') : 'PMJ-' . date('YmdHis') }}" readonly />
                                        @error('kode_peminjaman')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="id_user" class="form-label">Nama Pengunjung<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control @error('id_user') is-invalid @enderror" id="id_user" name="id_user" required>
                                            <option value="">Pilih Pengunjung</option>
                                            @foreach ($all_users as $user)
                                                <option value="{{ $user->id }}">{{ $user->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_user')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="id_buku" class="form-label">Nama Buku<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control @error('id_buku') is-invalid @enderror" id="id_buku" name="id_buku" required>
                                            <option value="">Pilih Buku</option>
                                            @foreach ($all_books as $book)
                                                <option value="{{ $book->id }}">{{ $book->judul_buku }}</option>
                                            @endforeach
                                        </select>
                                        @error('id_buku')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="tgl_kunjungan" class="form-label">Tanggal Kunjungan<span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control @error('tgl_kunjungan') is-invalid @enderror"
                                            id="tgl_kunjungan" name="tgl_kunjungan" value="{{ old('tgl_kunjungan') }}" required />
                                        @error('tgl_kunjungan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label for="tujuan" class="form-label">Tujuan<span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" name="tujuan" rows="3" style="height: 100px;" required>{{ old('tujuan') }}</textarea>
                                        @error('tujuan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <a href="{{ route('peminjaman.index') }}" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
