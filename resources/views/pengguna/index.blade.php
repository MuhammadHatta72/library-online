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
                            <div class="table-responsive">
                                <table class="table table-striped" id="tablePaging">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Nomor Telepon</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Alamat</th>
                                            <th class="text-center">Action</th>
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
                                                <td class="d-flex justify-content-center gap-1 align-items-center">
                                                    @if($user->check_admin == 'Belum Terverifikasi')
                                                        <form id="verifyForm_{{ $user->id }}" action="{{ route('pengguna.update', $user->id) }}" method="post">
                                                            @csrf
                                                            @method('put')
                                                            <button type="submit" class="btn btn-success">
                                                                <i class="fas fa-check"></i> Verifikasi
                                                            </button>
                                                        </form>
                                                    @endif
                                                    <form id="deleteForm_{{ $user->id }}" action="{{ route('pengguna.destroy', $user->id) }}" method="post"
                                                        onsubmit="deleteData(event, 'deleteForm_{{ $user->id }}')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
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

    <script>
        // Function to confirm delete with Swal alert when submitting the form
        function deleteData(event, formId) {
            event.preventDefault();
            var form = document.getElementById(formId);

            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda tidak dapat mengembalikan data yang telah dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#6c757d',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    </script>

@endsection
