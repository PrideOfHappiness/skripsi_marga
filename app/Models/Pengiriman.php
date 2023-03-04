<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengiriman extends Model
{
    use HasFactory;

    protected $table = 'pengiriman';
    protected $fillable = [
        'kode_pengiriman',
        'kode_customer',
        'kode_barang',
        'no_FJ',
        'id_pengirim',
        'nama_pengirim',
        'nama_penerima',
        'alamat_pengiriman',
        'waktu_status',
        'status',
    ];

    public function kode_customer(): BelongsTo
    {
        return $this->belongsTo(Konsumen::class, 'kode_customer');
    }

    public function kode_barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class, 'kode_barang');
    }

    public function no_FJ(): BelongsTo
    {
        return $this->belongsTo(Penjualan::class, 'no_FJ');
    }

    public function id_pengirim(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class, 'id_pengirim');
    }
}

?>