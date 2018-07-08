<?php

namespace App\Repositories;

use App\Dokter;
use Illuminate\Http\Request;

class DokterRepository
{
    public function storeDataDokter($dokter)
    {
        $dokterStore = Dokter::create($dokter);

        return $dokterStore;
    }

    public function updateDataDokter($dokter, $id)
    {
        $dokterUpdate = Dokter::where('id', $id)
            ->update($dokter);

        return $dokterUpdate;
    }

    public function destroyDataDokter($id)
    {
        return $dokterDestroy = Dokter::destroy($id);
    }
}
