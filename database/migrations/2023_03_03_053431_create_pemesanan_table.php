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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->increments('no_SO', 20);
            $table->integer('kode_customer')->unsigned();
            $table->string('kode_karyawan', 8);
            $table->string('kode_barang', 25);
            $table->string('nama_barang', 100);
            $table->string('jenis_bayar', 18);
            $table->string('nama_customer', 18);
            $table->string('kode_billing_customer', 8);
            $table->string('nama_karyawan');
            $table->string('broker', 50)->nullable();
            $table->string('divisi_dealer', 5);
            $table->date('tgl_SO');
            $table->timestamps();

            $table->foreign('kode_customer')->references('kode_customer')->on('konsumen');
            $table->foreign('kode_karyawan')->references('kode_karyawan')->on('karyawan');
            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
};
