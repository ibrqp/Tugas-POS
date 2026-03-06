<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            LevelSeeder::class,
            UserSeeder::class,
            SupplierSeeder::class,
            KategoriSeeder::class,
            BarangSeeder::class
        ]);
    }
}
