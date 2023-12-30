<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;
use App\Models\User;

class Peminjaman extends Model
{
    protected $table = 'peminjamans';

    protected $fillable = [
        'kode_peminjaman',
        'id_buku',
        'id_user',
        'tgl_kunjungan',
        'tujuan',
        'status',
    ];
    // use HasFactory;

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
