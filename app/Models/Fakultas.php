<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $fillable = [
        'kode_fakultas',
        'fakultas'
    ];

    protected $table = 'fakultas';
}
