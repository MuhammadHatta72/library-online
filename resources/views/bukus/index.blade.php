@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('sidebar')
    @include('layouts.sidebar_admin')
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Daftar Buku</h1>
        </div>

        @if ($errors->any())
            {{-- display swalaert --}}
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
                            <h4>Data Buku</h4>
                        </div>
                        <div class="card-body">
                            <div class="float-right mb-3">
                                <a class="btn btn-success border-0 text-white createBtn" href="{{ route('buku.create') }}">
                                    <i class="fas fa-plus"></i>
                                    Tambah Buku
                                </a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped" id="tablePaging">
                                    <thead>
                                        <tr class="text-center">
                                            <th class="text-center">Kode</th>
                                            <th class="text-center">Judul</th>
                                            <th class="text-center">Kateogri</th>
                                            <th class="text-center">Jumlah Buku</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($all_books as $book)
                                            <tr class="text-center">
                                                <td>{{ $book->kode_buku }}</td>
                                                <td>{{ $book->judul_buku }}</td>
                                                <td>{{ $book->kategori }}</td>
                                                <td>{{ $book->jumlah_buku }}</td>
                                                <td class="d-flex justify-content-center gap-1 align-items-center">
                                                    <a class="btn btn-warning text-white showBtn"
                                                        href="{{ route('buku.show', $book->id) }}"
                                                        data-id="{{ $book->id }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a class="btn btn-primary text-white editBtn"
                                                        href="{{ route('buku.edit', $book->id) }}">
                                                        <i class="fas fa-pen"></i>
                                                    </a>
                                                    <form action="{{ route('buku.destroy', $book->id) }}" method="post"
                                                        onsubmit="deleteData(event)">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>
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
        //function confirm delete image with Swal alert when submit form
        function deleteData(event) {
            event.preventDefault(); // will stop the form submission
            var form = event.target; // changed to event.target to get the form element

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
                    form.submit(); // submitting the form when user press yes
                }
            })
        }
    </script>

@endsection
