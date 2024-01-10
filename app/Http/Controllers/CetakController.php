<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use PDF;

class CetakController extends Controller
{
    public function laporan_buku()
    {
        $buku = Buku::all();
        return view('laporan.bukus', ['all_books' => $buku]);
    }
    public function cetak_buku()
    {
        $buku = Buku::all();
        $pdf = PDF::loadview('print.laporan_buku', ['all_books' => $buku]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }

    public function laporan_pengguna()
    {
        $pengguna = User::all();
        return view('laporan.penggunas', ['all_users' => $pengguna]);
    }

    public function cetak_pengguna()
    {
        $pengguna = User::all();
        $pdf = PDF::loadview('print.laporan_pengguna', ['all_users' => $pengguna]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }

    public function laporan_peminjaman()
    {
        $peminjaman = Peminjaman::all();
        return view('laporan.peminjamans', ['peminjamans' => $peminjaman]);
    }

    public function cetak_peminjaman()
    {
        $peminjaman = Peminjaman::all();
        $pdf = PDF::loadview('print.laporan_peminjaman', ['all_peminjaman' => $peminjaman]);
        $pdf->setPaper('A4', 'landscape');
        return $pdf->stream();
    }
}
