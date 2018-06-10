<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDokterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_dokter');
            $table->string('nama_dokter');
            $table->string('spesialis');
            $table->string('alamat_dokter');
            $table->string('telepon_dokter');
            $table->string('kode_poliklinik');
            $table->string('tarif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokter');
    }
}
