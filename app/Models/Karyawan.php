<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $fillable = [
        'kode_karyawan',
        'nama_karyawan',
        'alamat',
        'gender',
        'no_telp',
    ];


    public function pemesanan(): HasMany
    {
        return $this->hasMany(Pemesanan::class, 'kode_karyawan');
    }

    public function penjualan(): HasMany
    {
        return $this->hasMany(Penjualan::class, 'kode_karyawan');
    }
}

?>
