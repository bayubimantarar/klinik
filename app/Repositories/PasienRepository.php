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

    public function updateDataPasien($data, $id)
    {
        return $update = Pasien::where('id', $id)
            ->update($data);
    }

    public function destroyDataPasien($id)
    {
        return $destroy = Pasien::destroy($id);
    }
}
