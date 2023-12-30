@extends('layouts.custom')

@section('title', 'Register')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
                <img src="{{ asset('assets/img/pppbulutuban.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>

            <div class="card card-primary">
                <div class="card-header"><h4>Register</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register-user') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input id="nama" type="text" class="form-control
                            @error('nama')
                            is-invalid
                            @enderror" name="nama" autofocus>
                            @error('nama')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="no_hp">Nomor Telepon</label>
                                <input id="no_hp" type="number" class="form-control
                                @error('no_hp')
                                is-invalid
                                @enderror" name="no_hp">
                                @error('no_hp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control
                                @error('email')
                                is-invalid
                                @enderror" name="email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input id="alamat" type="text" class="form-control
                            @error('alamat')
                            is-invalid
                            @enderror" name="alamat" autofocus>
                            @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="password" class="d-block">Password</label>
                                <input id="password" type="password" class="form-control
                                @error('password')
                                is-invalid
                                @enderror" name="password">
                                @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group col-6">
                                <label for="password_confirmation" class="d-block">Password Confirmation</label>
                                <input id="password_confirmation" type="password" class="form-control"
                                       name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">
                                Register
                            </button>
                            <div class="mt-2 text-muted text-center">
                                Already have an account? <a href="{{ route('login') }}">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="simple-footer">
                Copyright &copy; 2023
                <div class="bullet"></div>
                Developed By Desy Shofiatul hidayah 2023.
            </div>
        </div>
    </div>
@endsection
