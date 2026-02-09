<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'nama_produk' => 'Laptop ASUS',
                'deskripsi' => 'Laptop untuk kerja dan kuliah',
                'harga' => 12000000,
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Mouse Logitech',
                'deskripsi' => 'Mouse wireless',
                'harga' => 250000,
                'stok' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
