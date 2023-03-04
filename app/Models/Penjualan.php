<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $fillable = [
        'no_FJ',
        'kode_customer',
        'kode_wilayah',
        'kode_financing_customer',
        'kode_barang',
        'kode_gudang',
        'kode_karyawan',
        'no_SO',
        'tanggal_cetak_FJ',
        'no_mesin',
        'no_rangka',
        'tahun_rakit',
        'warna_sepeda_motor',
        'nama_barang',
        'jenis_bayar',
        'nama_customer',
        'alamat_customer',
        'no_ktp_customer',
        'no_telp_customer',
        'nama_penanggung',
        'nama_bpkb_stnk',
        'alamat_bpkb_stnk',
        'no_ktp_bpkb_stnk',
        'nama_karyawan',
        'komisi',
        'nama_dealer',
    ];

    public function kode_customer_2(): BelongsTo
    {
        return $this->belongsTo(Konsumen::class, 'kode_customer');
    }

    public function kode_wilayah(): BelongsTo
    {
        return $this->belongsTo(Wilayah::class, 'kode_wilayah');
    }

    public function kode_financing_customer(): BelongsTo
    {
        return $this->belongsTo(Financing::class, 'kode_financing_customer');
    }

    public function kode_barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'kode_barang');
    }

    public function kode_gudang(): BelongsTo
    {
        return $this->belongsTo(Gudang::class, 'kode_gudang');
    }

    public function kode_karyawan(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class, 'kode_karyawan');
    }

    public function no_SO(): BelongsTo
    {
        return $this->belongsTo(Pemesanan::class, 'no_SO');
    }
}
