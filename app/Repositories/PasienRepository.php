<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Pasien;

class PasienRepository
{
    public function getAllDataPasien()
    {
        return $pasien = Pasien::all();
    }

    public function storeDataPasien($data)
    {
        return $store = Pasien::create($data);   
    }
}
