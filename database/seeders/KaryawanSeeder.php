<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create([
            'kode_karyawan' => 'K0000001',
            'nama_karyawan' => 'Test Karyawan 1',
            'alamat' => 'Jl. Hayam Wuruk 58 Tanggung, Wlingi, Blitar',
            'gender' => 'P',
            'status' => 'Karyawan',
            'no_telp' => '085700088832',
            'password' => bcrypt('karyawan123'),
        ]);

        Karyawan::create([
            'kode_karyawan' => 'P0000001',
            'nama_karyawan' => 'Test Pemilik 1',
            'alamat' => 'Jl. Hayam Wuruk 59 Tanggung, Wlingi, Blitar',
            'gender' => 'L',
            'status' => 'Pemilik',
            'no_telp' => '085700088832',
            'password' => bcrypt('pemilik123'),
        ]);
    }
}
