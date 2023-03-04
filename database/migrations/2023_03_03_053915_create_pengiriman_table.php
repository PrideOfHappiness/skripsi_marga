<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengiriman', function (Blueprint $table) {
            $table->increments('kode_pengiriman', 8);
            $table->integer('no_FJ')->unsigned();
            $table->string('kode_barang', 25);
            $table->integer('kode_customer')->unsigned();
            $table->string('id_pengirim', 8);
            $table->string('nama_penerima');
            $table->string('nama_pengirim');
            $table->string('alamat_pengiriman');
            $table->datetime('waktu_status');
            $table->string('status');
            $table->timestamps();

            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->foreign('kode_customer')->references('kode_customer')->on('konsumen');
            $table->foreign('id_pengirim')->references('kode_karyawan')->on('karyawan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengiriman');
    }
};
