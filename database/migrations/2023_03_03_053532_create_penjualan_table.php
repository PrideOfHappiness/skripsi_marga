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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('no_FJ', 21);
            $table->integer('kode_customer')->unsigned();
            $table->string('kode_wilayah', 8);
            $table->string('kode_financing_customer', 8);
            $table->string('kode_barang', 25);
            $table->string('kode_gudang', 5);
            $table->string('kode_karyawan', 8);
            $table->integer('no_SO')->unsigned();
            $table->date('tanggal_cetak_FJ');
            $table->string('no_mesin', 12)->unique();
            $table->string('no_rangka', 14)->unique();
            $table->string('tahun_rakit', 4);
            $table->string('warna_sepeda_motor', 50);
            $table->string('nama_barang', 100);
            $table->string('jenis_bayar', 18);
            $table->string('nama_customer', 100);
            $table->string('alamat_customer');
            $table->string('no_ktp_customer', 16);
            $table->string('no_telp_customer', 15);
            $table->string('nama_penanggung');
            $table->string('nama_bpkb_stnk', 100);
            $table->string('alamat_bpkb_stnk');
            $table->string('no_ktp_bpkb_stnk', 16);
            $table->string('nama_karyawan');
            $table->string('komisi');
            $table->string('nama_dealer');
            $table->timestamps();

            $table->foreign('kode_customer')->references('kode_customer')->on('konsumen');
            $table->foreign('kode_karyawan')->references('kode_karyawan')->on('karyawan');
            $table->foreign('kode_barang')->references('kode_barang')->on('barang');
            $table->foreign('kode_financing_customer')->references('kode_financing_customer')->on('financing');
            $table->foreign('kode_gudang')->references('kode_gudang')->on('gudang');
            $table->foreign('no_SO')->references('no_SO')->on('pemesanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
};
