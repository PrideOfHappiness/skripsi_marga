<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BPKBSTNK extends Model
{
    use HasFactory;

    protected $table = 'bpkb_stnk';

    protected $fillable = [
        'kode_customer',
        'kode_barang',
        'nama_bpkb_stnk',
        'nama_customer',
        'alamat_customer',
        'tanggal_proses',
        'tanggal_cetak_FJ',
        'no_FJ',
        'tanggal_ambil',
    ];

    public function no_FJ(): BelongsTo
    {
        return $this->belongsTo(Penjualan::class, 'no_FJ');
    }

    public function kode_customer(): BelongsTo
    {
        return $this->belongsTo(Konsumen::class, 'kode_customer');
    }

    public function kode_barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'kode_barang');
    }
}
?>