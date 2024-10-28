<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'kode_genre',
        'genre'
    ];

    protected $table = 'genre';
}
