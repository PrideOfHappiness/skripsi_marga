<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;

    protected $table = 'wilayah';

    protected $fillable = [
        'kode_wilayah',
        'nama_wilayah',
    ];

    public function konsumen(){
        return $this->hasMany(Konsumen::class, 'kode_wilayah');
    }

    public function penjualan(): HasMany
    {
        return $this->hasMany(Penjualan::class, 'kode_wilayah');
    } 
}

?>
