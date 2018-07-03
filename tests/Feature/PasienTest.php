<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PasienTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @test itTestOpenThePage
     */
    public function itTestOpenThePage()
    {
        $this->assertTrue(true);
    }

    /**
     * A basic test example.
     *
     * @test itTestOpenThePage
     */
    public function itStoreNewDataPasien()
    {
        $storeDataPasien = $this
            ->json('POST', '/pasien/store', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => 'Bayu Bimantara',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622
            ]);

        $this
            ->assertDatabaseHas('pasien', [
                'kode_pasien' => 'ABC001',
                'nama_pasien' => 'Bayu Bimantara',
                'gender_pasien' => 1,
                'umur_pasien' => 20,
                'telepon_pasien' => 622
            ]);

        $storeDataPasien
            ->assertStatus(201);
    }
}
