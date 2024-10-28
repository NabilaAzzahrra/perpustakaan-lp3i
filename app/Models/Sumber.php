<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sumber extends Model
{
    protected $fillable = [
        'kode_sumber',
        'sumber'
    ];

    protected $table = 'sumber';
}
