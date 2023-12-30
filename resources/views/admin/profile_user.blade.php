@extends('layouts.app')

@section('title', 'Edit Profile')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
        </div>

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

        <div class="section-body">
            <div class="container-xl px-4 mt-4">
                <hr class="mt-0 mb-4" />
                <div class="row">
                    <div class="col-xl-12">
                        <!-- Edit profile card-->
                        <div class="card mb-4">
                            <div class="card-header bg-whitesmoke">
                                <h4>Profile</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('admin-profile.update', auth()->user()->id) }}">
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
    </section>
@endsection
