<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
    protected $fillable = [
        'kode_pasien', 
        'nama_pasien',
        'gender_pasien',
        'umur_pasien',
        'telepon_pasien', 
    ];
}
