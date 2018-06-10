<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_resep');
            $table->string('tanggal_resep');
            $table->string('kode_dokter');
            $table->string('kode_pasien');
            $table->string('kode_poliklinik');
            $table->float('total_harga');
            $table->float('bayar');
            $table->float('kembali');
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
        Schema::dropIfExists('resep');
    }
}
