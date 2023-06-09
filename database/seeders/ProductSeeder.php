<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(
        [
        'user_id' => 1,
        'product_name' => "Classic Denim",
        'price' => 499.57,
        'img' => 'fab.png'
        ]);
    }
}
