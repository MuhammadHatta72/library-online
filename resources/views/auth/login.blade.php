@extends('layouts.custom')

@section('title', 'Login')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
                <a href="/">
                    <img src="{{ asset('assets/img/pppbulutuban.png') }}" alt="logo" width="120" class="circle">
                </a>
            </div>

            <div class="card card-primary">
                <div class="card-header">
                    <h4>Login</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login-user') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email"
                                   class="form-control @error('email')
                            is-invalid
                            @enderror"
                                   name="email" tabindex="1" required>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="d-block">
                                <label for="password" class="control-label">Password</label>
                                {{-- <div class="float-right">
                                    <a href="{{ route('password.request') }}" class="text-small">
                                        Forgot Password?
                                    </a>
                                </div> --}}
                            </div>
                            <div class="d-flex align-items-center justify-content-end">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" name="password"
                                       tabindex="2" required>
                                <span class="position-absolute px-1">
                                    <button class="eye btn border-0" type="button" onclick="showPW()">
                                        <i class="fas fa-eye fs-6"></i>
                                    </button>
                                    <button class="eye-slash btn border-0 d-none" type="button" onclick="hidePW()">
                                        <i class="fas fa-eye-slash fs-6"></i>
                                    </button>
                                </span>
                            </div>
                            @error('password')
                            <div class="invalid-feedback d-inline-flex">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                Login
                            </button>
                            <div class="mt-2 text-muted text-center">
                                Don't have an account? <a href="{{ route('register') }}">Register</a>
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
