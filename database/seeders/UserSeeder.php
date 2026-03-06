<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('m_user')->insert([
            [
                'level_id' => 1,
                'username' => 'admin',
                'nama' => 'Administrator',
                'password' => Hash::make('12345')
            ],
            [
                'level_id' => 2,
                'username' => 'kasir',
                'nama' => 'Kasir Toko',
                'password' => Hash::make('12345')
            ]
        ]);
    }
}
