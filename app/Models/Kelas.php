<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $fillable = [
        'kode_kelas',
        'kelas',
        'kode_jurusan'
    ];

    protected $table = 'kelas';
}
