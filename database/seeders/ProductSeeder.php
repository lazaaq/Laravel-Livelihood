<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'T-shirt Oversized Basic',
            'slug' => 't-shirt-oversized-basic',
            'link' => 'www.shopee.com',
            'harga' => '79000',
            'deskripsi' => 'Warna Hitam, Bahan Cotton',
            'image' => '/img/produk/basic-01.jpg'
        ]);
    }
}
