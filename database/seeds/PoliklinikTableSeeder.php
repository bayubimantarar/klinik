<?php

use DB;
use Illuminate\Database\Seeder;

class PoliklinikTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $truncatePoliklinik = DB::table('poliklinik')
            ->truncate();

        $storePolklinik = DB::table('poliklinik')
            ->insert([
                [
                    'kode_poliklinik' => '011501',
                    'nama_poliklinik' => 'Akupuntur'
                ],
                [
                    'kode_poliklinik' => '012101',
                    'nama_poliklinik' => 'Anesthesi'
                ],
                [
                    'kode_poliklinik' => '011603',
                    'nama_poliklinik' => 'Bedah Anak'
                ],
                [
                    'kode_poliklinik' => '011602',
                    'nama_poliklinik' => 'Bedah Digestive'
                ],
                [
                    'kode_poliklinik' => '012001',
                    'nama_poliklinik' => 'Bedah Mulut'
                ],
                [
                    'kode_poliklinik' => '011901',
                    'nama_poliklinik' => 'Bedah Orthopedi & Traumatologi'
                ],
                [
                    'kode_poliklinik' => '011604',
                    'nama_poliklinik' => 'Bedah Plastik'
                ],
                [
                    'kode_poliklinik' => '011701',
                    'nama_poliklinik' => 'Bedah Saraf'
                ],
                [
                    'kode_poliklinik' => '011605',
                    'nama_poliklinik' => 'Bedah Thoraks & Vaskular'
                ],
                [
                    'kode_poliklinik' => '011601',
                    'nama_poliklinik' => 'Bedah Umum'
                ],
                [
                    'kode_poliklinik' => '010401',
                    'nama_poliklinik' => 'Edelweis'
                ],
                [
                    'kode_poliklinik' => '012402',
                    'nama_poliklinik' => 'Gangguan Tidur'
                ],
                [
                    'kode_poliklinik' => '010901',
                    'nama_poliklinik' => 'General Check Up'
                ],
                [
                    'kode_poliklinik' => '011001',
                    'nama_poliklinik' => 'Geriatri'
                ],
                [
                    'kode_poliklinik' => '011101',
                    'nama_poliklinik' => 'Gigi & Mulut'
                ],
                [
                    'kode_poliklinik' => '011401',
                    'nama_poliklinik' => 'Gizi'
                ],
                [
                    'kode_poliklinik' => '012803',
                    'nama_poliklinik' => 'Gizi ICC'
                ],
                [
                    'kode_poliklinik' => '014801',
                    'nama_poliklinik' => 'Hemato Onkologi Anak'
                ],
                [
                    'kode_poliklinik' => '014301',
                    'nama_poliklinik' => 'Hemodialisa Rawat Jalan'
                ],
                [
                    'kode_poliklinik' => '012701',
                    'nama_poliklinik' => 'Herbal'
                ],
                [
                    'kode_poliklinik' => '011201',
                    'nama_poliklinik' => 'Jantung'
                ],
                [
                    'kode_poliklinik' => '012901',
                    'nama_poliklinik' => 'Jantung Terpadu'
                ],
                [
                    'kode_poliklinik' => '012801',
                    'nama_poliklinik' => 'Kanker Terpadu'
                ],
                [
                    'kode_poliklinik' => '014201',
                    'nama_poliklinik' => 'Kedokteran Nuklir Rawat Jalan'
                ],
                [
                    'kode_poliklinik' => '013201',
                    'nama_poliklinik' => 'Kesehatan Anak'
                ],
                [
                    'kode_poliklinik' => '010701',
                    'nama_poliklinik' => 'Kesehatan Jiwa'
                ],
                [
                    'kode_poliklinik' => '012501',
                    'nama_poliklinik' => 'Kesehatan Reproduksi (Infertilitas)'
                ],
                [
                    'kode_poliklinik' => '014901',
                    'nama_poliklinik' => 'Klinik Nyeri'
                ],
                [
                    'kode_poliklinik' => '012601',
                    'nama_poliklinik' => 'Kontrasepsi Mantap (Kontap)'
                ],
                [
                    'kode_poliklinik' => '010601',
                    'nama_poliklinik' => 'Kulit & Kelamin'
                ],
                [
                    'kode_poliklinik' => '010101',
                    'nama_poliklinik' => 'Mata'
                ],
                [
                    'kode_poliklinik' => '013901',
                    'nama_poliklinik' => 'Maternal'
                ],
                [
                    'kode_poliklinik' => '012401',
                    'nama_poliklinik' => 'Memori'
                ],
                [
                    'kode_poliklinik' => '010501',
                    'nama_poliklinik' => 'Obsygn'
                ],
                [
                    'kode_poliklinik' => '011301',
                    'nama_poliklinik' => 'Penyakit Dalam'
                ],
                [
                    'kode_poliklinik' => '014001',
                    'nama_poliklinik' => 'Perinatal'
                ],
                [
                    'kode_poliklinik' => '013001',
                    'nama_poliklinik' => 'Psikologi'
                ],
                [
                    'kode_poliklinik' => '014501',
                    'nama_poliklinik' => 'PTRM'
                ],
                [
                    'kode_poliklinik' => '010301',
                    'nama_poliklinik' => 'Pulmonologi (PARU) Infeksi'
                ],
                [
                    'kode_poliklinik' => '010302',
                    'nama_poliklinik' => 'Pulmonologi (PARU) Non Infeksi'
                ],
                [
                    'kode_poliklinik' => '014101',
                    'nama_poliklinik' => 'Radioterapi Rawat Jalan'
                ],
                [
                    'kode_poliklinik' => '014701',
                    'nama_poliklinik' => 'Rawat Jalan IBS'
                ],
                [
                    'kode_poliklinik' => '014401',
                    'nama_poliklinik' => 'Rehabilitasi Medik Rawat Jalan'
                ],
                [
                    'kode_poliklinik' => '010801',
                    'nama_poliklinik' => 'Saraf'
                ],
                [
                    'kode_poliklinik' => '012301',
                    'nama_poliklinik' => 'Skin Centre (Klinik Estetika)'
                ],
                [
                    'kode_poliklinik' => '0101201',
                    'nama_poliklinik' => 'THT-KL'
                ],
                [
                    'kode_poliklinik' => '013301',
                    'nama_poliklinik' => 'Tumbuh Kembang'
                ],
                [
                    'kode_poliklinik' => '013101',
                    'nama_poliklinik' => 'UPKT-PA Sekar Arum'
                ],
                [
                    'kode_poliklinik' => '011801',
                    'nama_poliklinik' => 'Urologi'
                ],
            ])
    }
}
