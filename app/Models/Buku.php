<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Peminjaman;

class Buku extends Model
{
    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'deskripsi',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'kategori',
        'lemari',
        'rak',
        'jumlah_buku',
        'gambar'
    ];

    use HasFactory;

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class, 'id_buku', 'id');
    }
}
