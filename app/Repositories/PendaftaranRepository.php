<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use App\Pendaftaran;

class PendaftaranRepository
{
    public function getAllDataPendaftaran()
    {
        return $Pendaftaran = Pendaftaran::all();
    }

    public function getOneDataPendaftaran($id)
    {
        $Pendaftaran = Pendaftaran::where('id', $id)
            ->firstOrFail();

        return $Pendaftaran;
    }

    public function storeDataPendaftaran($Pendaftaran)
    {
        $PendaftaranStore = Pendaftaran::create($Pendaftaran);

        return $PendaftaranStore;
    }

    public function updateDataPendaftaran($Pendaftaran, $id)
    {
        return $update = Pendaftaran::where('id', $id)
            ->update($Pendaftaran);
    }

    public function destroyDataPendaftaran($id)
    {
        return $destroy = Pendaftaran::destroy($id);
    }
}
