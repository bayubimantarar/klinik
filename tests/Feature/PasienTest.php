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
    public function itTestOpenThePage()
    {
        $pasien = $this->get('/');
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
            ->assertJson([
                'stored' => true
            ])
            ->assertStatus(200);
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
            ->assertJson([
                'updated' => true
            ])
            ->assertStatus(200);
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
            ->assertJson([
                'destroyed' => true
            ])
            ->assertStatus(200);
    }
}