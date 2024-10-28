<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = [
        'kode_jurusan',
        'jurusan',
        'kode_fakultas'
    ];

    protected $table = 'jurusan';
}