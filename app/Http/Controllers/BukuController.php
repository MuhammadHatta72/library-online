<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "all_books" => Buku::all()
        ];
        return view('bukus.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bukus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "kode_buku" => "unique:bukus",
            "judul_buku" => "required",
            "deskripsi" => "required",
            "penulis" => "required",
            "penerbit" => "required",
            "tahun_terbit" => "required",
            "kategori" => "required",
            "lemari" => "required",
            "rak" => "required",
            "jumlah_buku" => "required",
            "gambar" => "image|mimes:jpg,png,jpeg|max:2048",
        ],
        [
            "kode_buku.unique" => "Kode buku sudah ada",
            "judul_buku.required" => "Judul buku harus diisi",
            "deskripsi.required" => "Deskripsi buku harus diisi",
            "penulis.required" => "Penulis buku harus diisi",
            "penerbit.required" => "Penerbit buku harus diisi",
            "tahun_terbit.required" => "Tahun terbit buku harus diisi",
            "kategori.required" => "Kategori buku harus diisi",
            "lemari.required" => "Lemari buku harus diisi",
            "rak.required" => "Rak buku harus diisi",
            "jumlah_buku.required" => "Jumlah buku harus diisi",
            "gambar.image" => "Gambar buku harus berupa gambar",
            "gambar.mimes" => "Gambar buku harus berupa jpg, png, atau jpeg",
            "gambar.max" => "Gambar buku maksimal 2MB",
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $name = time() . '.' . $file->extension();
            $destinationPath = public_path('assets/buku');
            $file->move($destinationPath, $name);
        }

        $buku = new Buku();
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->deskripsi = $request->deskripsi;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->kategori = $request->kategori;
        $buku->lemari = $request->lemari;
        $buku->rak = $request->rak;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->gambar = $name ?? 'default.png';
        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        $data = [
            "buku" => $buku
        ];
        return view('bukus.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $data = [
            "book" => $buku
        ];
        return view('bukus.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            "kode_buku" => "unique:bukus,kode_buku," . $buku->id,
            "judul_buku" => "required",
            "deskripsi" => "required",
            "penulis" => "required",
            "penerbit" => "required",
            "tahun_terbit" => "required",
            "kategori" => "required",
            "lemari" => "required",
            "rak" => "required",
            "jumlah_buku" => "required",
            "gambar" => "image|mimes:jpg,png,jpeg|max:2048",
        ],
        [
            "kode_buku.unique" => "Kode buku sudah ada",
            "judul_buku.required" => "Judul buku harus diisi",
            "deskripsi.required" => "Deskripsi buku harus diisi",
            "penulis.required" => "Penulis buku harus diisi",
            "penerbit.required" => "Penerbit buku harus diisi",
            "tahun_terbit.required" => "Tahun terbit buku harus diisi",
            "kategori.required" => "Kategori buku harus diisi",
            "lemari.required" => "Lemari buku harus diisi",
            "rak.required" => "Rak buku harus diisi",
            "jumlah_buku.required" => "Jumlah buku harus diisi",
            "gambar.image" => "Gambar buku harus berupa gambar",
            "gambar.mimes" => "Gambar buku harus berupa jpg, png, atau jpeg",
            "gambar.max" => "Gambar buku maksimal 2MB",
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $name = time() . '.' . $file->extension();
            $destinationPath = public_path('assets/buku');
            $file->move($destinationPath, $name);
        }

        $buku = Buku::find($buku->id);
        $buku->kode_buku = $request->kode_buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->deskripsi = $request->deskripsi;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->kategori = $request->kategori;
        $buku->lemari = $request->lemari;
        $buku->rak = $request->rak;
        $buku->jumlah_buku = $request->jumlah_buku;
        $buku->gambar = $name ?? $buku->gambar;
        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $id = $buku->id;
        if($buku->gambar != 'default.png'){
            $file_path = public_path('assets/buku/'.$buku->gambar);
            unlink($file_path);
        }
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
