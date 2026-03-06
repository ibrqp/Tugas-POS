<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('m_supplier')->insert([
            [
                'supplier_kode' => 'SUP01',
                'supplier_nama' => 'PT Sumber Makmur',
                'supplier_alamat' => 'Jakarta'
            ],
            [
                'supplier_kode' => 'SUP02',
                'supplier_nama' => 'CV Berkah Jaya',
                'supplier_alamat' => 'Surabaya'
            ]
        ]);
    }
}
