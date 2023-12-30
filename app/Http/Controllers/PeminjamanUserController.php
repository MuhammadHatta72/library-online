<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanUserController extends Controller
{
    public function pinjamUser(Request $request){
        if(auth()->user() !== null){
            $request->validate([
                'id_book' => 'required',
                'tgl_kunjungan' => 'required',
                'tujuan_kunjungan' => 'required',
            ], [
                'id_book.required' => 'Buku harus dipilih',
                'tgl_kunjungan.required' => 'Tanggal kunjungan harus diisi',
                'tujuan_kunjungan.required' => 'Tujuan harus diisi',
            ]);

            $buku = Buku::find($request->id_book);
            $user = User::find(auth()->user()->id);

            if((int)$buku->jumlah_buku <= 0){
                return redirect()->route('all.library')->with('error', 'Buku tidak tersedia');
            }

            // $buku->jumlah_buku = (int)$buku->jumlah_buku - 1;
            // $buku->save();
            
            $peminjaman = new Peminjaman();
            $peminjaman->kode_peminjaman = 'PMJ-'.date('YmdHis');
            $peminjaman->id_buku = $buku->id;
            $peminjaman->id_user = $user->id;
            $peminjaman->tgl_kunjungan = $request->tgl_kunjungan;
            $peminjaman->tujuan = $request->tujuan_kunjungan;
            $peminjaman->status = "diproses";
            $peminjaman->save();

            return redirect()->route('all.library')->with('success', 'Buku berhasil dipinjam');
        }else{
            return redirect()->route('all.library')->with('error', 'Anda belum login');
        }
    }

    public function getPinjamUser($id){
        $peminjaman = Peminjaman::find($id);
        $data = [
            'peminjaman' => $peminjaman,
            'buku' => $peminjaman->buku,
            'user' => $peminjaman->user,
        ];
        return response()->json([
            'data' => $data,
        ]);
    }
}
