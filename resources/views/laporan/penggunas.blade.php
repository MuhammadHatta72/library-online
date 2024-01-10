@extends('layouts.app')

@section('title', 'Daftar Pengguna')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Pengguna</h1>
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
                            <h4>Data Pengguna</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-right mb-3">
                                <a class="btn btn-success border-0 text-white createBtn" href="{{ route('cetak.pengguna') }}" target="_blank">
                                    <i class="fas fa-print"></i>
                                    Print Pengguna
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped" id="tablePaging">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Nomor Telepon</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Alamat</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_users as $user)
                                            <tr class="text-center">
                                                <td>{{ $user->nama }}</td>
                                                <td>{{ $user->no_hp }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->check_admin == 'Terverifikasi')
                                                        <span class="badge badge-primary">Terverifikasi</span>
                                                    @else
                                                        <span class="badge badge-warning">Belum Terverifikasi</span>
                                                    @endif
                                                </td>
                                                <td>{{ $user->alamat }}</td>
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
