<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    protected $fillable = [
        'kode_penerbit',
        'penerbit',
        'alamat'
    ];

    protected $table = 'penerbit';
}
