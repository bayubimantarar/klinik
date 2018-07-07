<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $fillable = [
        'kode_dokter',
        'nama_dokter',
        'spesialis',
        'alamat_dokter',
        'telepon_dokter',
        'kode_poliklinik',
        'tarif',
    ];
}
