<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Financing extends Model
{
    use HasFactory;

    protected $table = 'financing';

    protected $fillable = [
        'kode_finance_customer',
        'nama_penanggung',
    ];

    public function penjualan(): HasMany
    {
        return $this->hasMany(Penjualan::class, 'kode_finance_customer');
    }
}
