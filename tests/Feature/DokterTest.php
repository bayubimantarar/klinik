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
            ->assertStatus(302);
    }

    /**
    * @test kodedokterCantBeEmpty
    */
    public function kodedokterCantBeEmpty()
    {
        $storeDataDokter = $this
            ->json('post', '/dokter/store', [
                'kode_dokter' => null,
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
            ->assertStatus(422);
    }

    /**
    * @test namadokterCantBeEmpty
    */
    public function namadokterCantBeEmpty()
    {
        $storeDataDokter = $this
            ->json('post', '/dokter/store', [
                'kode_dokter' => 'DKT001',
                'nama_dokter' => null,
                'spesialis' => 'Dokter Spesialis Anak',
                'alamat_dokter' => 'Bandung',
                'telepon_dokter' => 622,
                'kode_poliklinik' => 'ANK',
                'tarif' => 500000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataDokter
            ->assertStatus(422);
    }

    /**
    * @test spesialisCantBeEmpty
    */
    public function spesialisCantBeEmpty()
    {
        $storeDataDokter = $this
            ->json('post', '/dokter/store', [
                'kode_dokter' => 'DKT001',
                'nama_dokter' => 'Resti Wulandari',
                'spesialis' => null,
                'alamat_dokter' => 'Bandung',
                'telepon_dokter' => 622,
                'kode_poliklinik' => 'ANK',
                'tarif' => 500000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataDokter
            ->assertStatus(422);
    }

    /**
    * @test alamatdokterCantBeEmpty
    */
    public function alamatdokterCantBeEmpty()
    {
        $storeDataDokter = $this
            ->json('post', '/dokter/store', [
                'kode_dokter' => 'DKT001',
                'nama_dokter' => 'Resti Wulandari',
                'spesialis' => 'Dokter Spesialis Anak',
                'alamat_dokter' => null,
                'telepon_dokter' => 622,
                'kode_poliklinik' => 'ANK',
                'tarif' => 500000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataDokter
            ->assertStatus(422);
    }

    /**
    * @test telepondokterCantBeEmpty
    */
    public function telepondokterCantBeEmpty()
    {
        $storeDataDokter = $this
            ->json('post', '/dokter/store', [
                'kode_dokter' => 'DKT001',
                'nama_dokter' => 'Resti Wulandari',
                'spesialis' => 'Dokter Spesialis Anak',
                'alamat_dokter' => 'Bandung',
                'telepon_dokter' => null,
                'kode_poliklinik' => 'ANK',
                'tarif' => 500000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataDokter
            ->assertStatus(422);
    }

    /**
    * @test kodpoliklinikCantBeEmpty
    */
    public function kodpoliklinikCantBeEmpty()
    {
        $storeDataDokter = $this
            ->json('post', '/dokter/store', [
                'kode_dokter' => 'DKT001',
                'nama_dokter' => 'Resti Wulandari',
                'spesialis' => 'Dokter Spesialis Anak',
                'alamat_dokter' => 'Bandung',
                'telepon_dokter' => 622,
                'kode_poliklinik' => null,
                'tarif' => 500000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataDokter
            ->assertStatus(422);
    }

    /**
    * @test tarifCantBeEmpty
    */
    public function tarifCantBeEmpty()
    {
        $storeDataDokter = $this
            ->json('post', '/dokter/store', [
                'kode_dokter' => 'DKT001',
                'nama_dokter' => 'Resti Wulandari',
                'spesialis' => 'Dokter Spesialis Anak',
                'alamat_dokter' => 'Bandung',
                'telepon_dokter' => 622,
                'kode_poliklinik' => 'ANK',
                'tarif' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataDokter
            ->assertStatus(422);
    }

    /**
    * @test itUpdateDataDokter
    */
    public function itUpdateDataDokter()
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

        $updateDataDokter = $this
            ->json('put', '/dokter/update/1', [
                'kode_dokter' => 'DKT002',
                'nama_dokter' => 'Resti Wulandari Bismaka',
                'spesialis' => 'Dokter Spesialis Mata',
                'alamat_dokter' => 'Cimahi',
                'telepon_dokter' => 633,
                'kode_poliklinik' => 'MTA',
                'tarif' => 1000000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $this
            ->assertDatabaseHas('dokter', [
                'kode_dokter' => 'DKT002',
                'nama_dokter' => 'Resti Wulandari Bismaka',
                'spesialis' => 'Dokter Spesialis Mata',
                'alamat_dokter' => 'Cimahi',
                'telepon_dokter' => 633,
                'kode_poliklinik' => 'MTA',
                'tarif' => 1000000,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $updateDataDokter
            ->assertStatus(302);
    }

    /**
     * @test itDestroyDataDokter
     */
    public function itDestroyDataDokter()
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

        $destroyDataDokter = $this
            ->json('delete', '/dokter/destroy/1');

        $destroyDataDokter
            ->assertStatus(200);
    }
}
