<?php

namespace Tests\Feature;

use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PasienTest extends TestCase
{
    use RefreshDatabase;

    /**
    * @test itTestOpenThePage
    */
    public function itTestPasienPage()
    {
        $pasien = $this->get('/pasien');
        $pasien = $this->assertTrue(true);
    }

    /**
    * @test itStoreNewDataPasien
    */
    public function itStoreNewDataPasien()
    {
        $storeDataPasien = $this
            ->json('post', '/pasien/store', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => 'Bayu Bimantara',
                'alamat_pasien' => 'Bandung',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $this
            ->assertDatabaseHas('pasien', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => 'Bayu Bimantara',
                'alamat_pasien' => 'Bandung',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataPasien
            ->assertStatus(302);
    }

    /**
     * @test itUpdateDataPasien
     */
    public function itUpdateDataPasien()
    {
        $storeDataPasien = $this
            ->json('post', '/pasien/store', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => 'Bayu Bimantara',
                'alamat_pasien' => 'Bandung',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $this
            ->assertDatabaseHas('pasien', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => 'Bayu Bimantara',
                'alamat_pasien' => 'Bandung',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $updateDataPasien = $this
            ->json('put', '/pasien/update/1', [
                'kode_pasien' => 'ABC002',
                'nama_pasien' => 'Bayu Bismaka',
                'alamat_pasien' => 'Cimahi',
                'gender_pasien' => 1,
                'umur_pasien' => 17,
                'telepon_pasien' => 621,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $this
            ->assertDatabaseHas('pasien', [
                'kode_pasien' => 'ABC002',
                'nama_pasien' => 'Bayu Bismaka',
                'gender_pasien' => 1,
                'umur_pasien' => 17,
                'telepon_pasien' => 621,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $updateDataPasien
            ->assertStatus(302);
    }

    /**
     * @test itDestroyDataPasien
     */
    public function itDestroyDataPasien()
    {
        $storeDataPasien = $this
            ->json('post', '/pasien/store', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => 'Bayu Bimantara',
                'alamat_pasien' => 'Bandung',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $this
            ->assertDatabaseHas('pasien', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => 'Bayu Bimantara',
                'alamat_pasien' => 'Bandung',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $destroyDataPasien = $this
            ->json('delete', '/pasien/destroy/1');

        $destroyDataPasien
            ->assertStatus(200);
    }

    /**
    * @test kodepasienCantBeEmpty
    */
    public function kodepasienCantBeEmpty()
    {
        $storeDataPasien = $this
            ->json('post', '/pasien/store', [
                'kode_pasien' => null,
                'nama_pasien' => 'Bayu Bimantara',
                'alamat_pasien' => 'Bandung',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataPasien
            ->assertStatus(422);
    }

    /**
    * @test namapasienCantBeEmpty
    */
    public function namapasienCantBeEmpty()
    {
        $storeDataPasien = $this
            ->json('post', '/pasien/store', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => null,
                'alamat_pasien' => 'Bandung',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);

        $storeDataPasien
            ->assertStatus(422);
    }
}
