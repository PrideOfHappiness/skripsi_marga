<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $fillable = [
        'kode_barang',
        'nama_barang',
    ];


    public function penjualan(): HasMany
    {
        return $this->hasMany(Penjualan::class, 'kode_barang');
    }

    public function bpkbstnk(): HasOne
    {
        return $this->hasOne(BPKBSTNK::class, 'kode_barang');
    }


    public function pengiriman(): HasMany
    {
        return $this->hasMany(Pengiriman::class, 'kode_barang');
    }

    public function pemesanan(): HasMany
    {
        return $this->hasMany(Pemesanan::class, 'kode_barang');
    }
}

?>
