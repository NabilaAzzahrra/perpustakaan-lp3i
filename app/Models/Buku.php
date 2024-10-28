<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'kode_buku',
        'judul',
        'kode_penerbit',
        'kode_genre',
        'tahun_terbit',
        'sinopsis',
        'sinopsis',
        'halaman',
        'ebook',
        'kode_fakultas',
        'status',
        'kode_sumber',
    ];

    protected $table = 'buku';
}
