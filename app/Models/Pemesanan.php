<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $table = 'pemesanan';

    protected $fillable = [
        'no_SO',
        'kode_customer',
        'kode_karyawan',
        'kode_barang',

    ];


    public function kode_customer(): BelongsTo
    {
        return $this->belongsTo(Konsumen::class, 'kode_customer');
    }

    public function kode_karyawan(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class, 'kode_karyawan');
    }

    public function kode_barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'kode_barang');
    }

    public function penjualan(): HasOne
    {
        return $this->hasOne(Penjualan::class, 'no_SO');
    }
}

?>