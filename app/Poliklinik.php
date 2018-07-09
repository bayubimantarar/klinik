<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    protected $table = 'poliklinik',
    protected $fillable = [
        'kode_poliklinik',
        'nama_poliklinik'
    ];
}
