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

    public function getOneDataPasien($id)
    {
        $pasien = Pasien::where('id', $id)
            ->firstOrFail();

        return $pasien;
    }

    public function storeDataPasien($pasien)
    {
        $pasienStore = Pasien::create($pasien);

        return $pasienStore;
    }

    public function updateDataPasien($pasien, $id)
    {
        return $update = Pasien::where('id', $id)
            ->update($pasien);
    }

    public function destroyDataPasien($id)
    {
        return $destroy = Pasien::destroy($id);
    }
}
