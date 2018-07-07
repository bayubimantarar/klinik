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
}
