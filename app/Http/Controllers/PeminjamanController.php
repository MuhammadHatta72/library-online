<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'peminjamans' => Peminjaman::all(),
        ];
        return view('peminjaman.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'all_books' => Buku::where('jumlah_buku', '>', 0)->get(),
            'all_users' => User::where('role', 'user')->get(),
        ];
        return view('peminjaman.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_buku' => 'required',
            'id_user' => 'required',
            'tgl_kunjungan' => 'required',
            'tujuan' => 'required',
        ], [
            'id_buku.required' => 'Buku harus dipilih',
            'id_user.required' => 'User harus dipilih',
            'tgl_kunjungan.required' => 'Tanggal kunjungan harus diisi',
            'tujuan.required' => 'Tujuan harus diisi',
        ]);

        $buku = Buku::find($request->id_buku);
        $user = User::find($request->id_user);

        if((int)$buku->jumlah_buku <= 0){
            return redirect()->route('peminjaman.create')->with('error', 'Buku tidak tersedia');
        }

        $buku->jumlah_buku = (int)$buku->jumlah_buku - 1;
        $buku->save();

        $peminjaman = new Peminjaman();
        $peminjaman->kode_peminjaman = $request->kode_peminjaman;
        $peminjaman->id_buku = $buku->id;
        $peminjaman->id_user = $user->id;
        $peminjaman->tgl_kunjungan = $request->tgl_kunjungan;
        $peminjaman->tujuan = $request->tujuan;
        $peminjaman->status = "dipinjam";
        $peminjaman->save();

        return redirect()->route('peminjaman.index')->with('success', 'Buku berhasil dipinjam');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        $data = [
            'peminjaman' => $peminjaman,
        ];

        return view('peminjaman.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        try{
            $buku = Buku::find($peminjaman->id_buku);
            $buku->jumlah_buku = (int)$buku->jumlah_buku + 1;
            $buku->save();

            $peminjaman->status = "dikembalikan";
            $peminjaman->save();
            return redirect()->route('peminjaman.index')->with('success', 'Buku berhasil dikembalikan');
        }catch(\Exception $e){
            dd($e);
            return redirect()->route('peminjaman.index')->with('error', 'Buku gagal dikembalikan');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }

    public function pengembalian(Request $request, $id){
        $peminjaman = Peminjaman::find($id);
        $buku = Buku::find($peminjaman->id_buku);

        if((int)$buku->jumlah_buku <= 0){
            return redirect()->route('peminjaman.index')->with('error', 'Buku tidak tersedia');
        }

        $buku->jumlah_buku = (int)$buku->jumlah_buku - 1;
        $buku->save();

        $peminjaman->update([
            'status' => "dipinjam"
        ]);
        return redirect()->route('peminjaman.index')->with('success', 'Buku berhasil dipinjam');
    }
}
