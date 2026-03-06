<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('m_barang')->insert([
            [
                'kategori_id' => 1,
                'barang_kode' => 'BRG01',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 10000,
                'harga_jual' => 15000
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BRG02',
                'barang_nama' => 'Es Teh',
                'harga_beli' => 2000,
                'harga_jual' => 5000
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BRG03',
                'barang_nama' => 'Keripik Kentang',
                'harga_beli' => 5000,
                'harga_jual' => 8000
            ]
        ]);
    }
}
