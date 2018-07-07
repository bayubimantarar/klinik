<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DokterTest extends TestCase
{
    use RefreshDatabase;

    /**
    * @test itTestOpenThePage
    */
    public function itTestDokterPage()
    {
        $this
            ->get('/dokter')
            ->assertStatus(200);
    }

    /**
    * @test itStoreNewDataPasien
    */
    public function itStoreNewDataDokter()
    {
        $storeDataDokter = $this
            ->json('post', '/dokter/store', [
                'kode_dokter' => 'DKT001',
                'nama_dokter' => 'Resti Wulandari',
                'spesialis' => 'Dokter Spesialis Anak',
                'alamat_dokter' => 'Bandung',
                'telepon_dokter' => 622,
                'kode_poliklinik' => 'ANK',
                'tarif' => 500000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $this
            ->assertDatabaseHas('dokter', [
                'kode_dokter' => 'DKT001',
                'nama_dokter' => 'Resti Wulandari',
                'spesialis' => 'Dokter Spesialis Anak',
                'alamat_dokter' => 'Bandung',
                'telepon_dokter' => 622,
                'kode_poliklinik' => 'ANK',
                'tarif' => 500000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataDokter
            ->assertJson([
                'stored' => true
            ])
            ->assertStatus(200);
    }
}
