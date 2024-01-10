<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="">
    <title>Laporan Daftar Peminjaman & Pengembalian - Perpus Online UPT PPP Bulu Tuban</title>
    <style>
        html,
        body {
            font-family: 'Times New Roman', Times, serif;
            padding: 0;
            margin: 0;
        }

        .header {
            margin-top: 20px;
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .container {
            line-height: 24px;
            padding-left: 50px;
            padding-right: 50px;
            margin: auto;
        }

        .nama {
            text-decoration: underline;
            font-weight: bold;
        }
    </style>
    @php
        use Illuminate\Support\Carbon;
        Carbon::setLocale('id');
    @endphp
</head>

<body>
    <center class="header">
        <table border="0" cellpadding="10" cellspacing="0" style="width: 100%">
            <tr>
                <td style="width: 10%">
                    <img src="assets/img/pppbulutuban.png" alt="" width="100px">
                </td>
                <td style="width: 90%">
                    <h2>LAPORAN DAFTAR<br>PEMINJAMAN & PENGEMBALIAN BUKU<br>PERPUSTAKAAN ONLINE - UPT PPP BULU TUBAN</h2>
                </td>
            </tr>
        </table>
    </center>

    <div class="container">
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%">
            <tr>
                <th>No</th>
                <th>Kode Pinjam</th>
                <th>Nama Peminjam</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Tanggal Kunjungan</th>
                <th>Tujuan Kunjungan</th>
            </tr>
            @foreach ($all_peminjaman as $peminjaman)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peminjaman->kode_peminjaman }}</td>
                    <td>{{ $peminjaman->user->nama }}</td>
                    <td>{{ $peminjaman->buku->judul_buku }}</td>
                    <td>{{ Carbon::parse($peminjaman->tanggal_pinjam)->isoFormat('dddd, D MMMM Y') }}</td>
                    <td>{{ Carbon::parse($peminjaman->tanggal_kembali)->isoFormat('dddd, D MMMM Y') }}</td>
                    <td>{{ $peminjaman->status }}</td>
                    <td>{{ Carbon::parse($peminjaman->tanggal_kunjungan)->isoFormat('dddd, D MMMM Y') }}</td>
                    <td>{{ $peminjaman->tujuan }}</td>
                </tr>
            @endforeach
        </table>
        {{-- <table border="0" cellpadding="10" cellspacing="0" style="width:100%">
            <tr valign="top">
                <td>
                    <div class="jabatan">Ketua
                    </div>
                    <div class="ttd" style="margin-top: 10px">
                        <img src="assets/img/ttd.png" alt="" width="100px">
                    </div>
                    <div class="nama">Ibu Ketua
                    </div>
                    <div class="nip">NIP. </div>
                </td>
                <td>
                    <div class="jabatan">Koordinator Prakerin</div>
                    <div class="ttd" style="margin-top: 10px">
                        <img src="assets/img/ttd.png" alt="" width="100px">

                    </div>
                    <div class="nama">Bapak Prakerin
                    </div>
                    <div class="nip">NIP. </div>
                </td>
            </tr>
        </table> --}}
    </div>

</body>

</html>
