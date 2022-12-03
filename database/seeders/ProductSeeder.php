<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{

    public function run()
    {
        $product1 = Product::create([

            'name' => 'منتج أول ',
            'photo' => ' photo 1',
            'main_price' => 45,
            'main_discount' => 87,
            'category_id' => 1,
            'is_active' => true,
            'notes' => 'notes about product 1',


        ]);
        $product2 = Product::create([
            'name' => 'منتج ثاني ',
            'photo' => ' photo 2',
            'main_price' => 45,
            'main_discount' => 87,
            'category_id' => 1,
            'is_active' => true,
            'notes' => 'notes about product 1',
        ]);
        $product3 = Product::create([
            'name' => 'منتج ثالث ',
            'photo' => ' photo 3',
            'main_price' => 45,
            'main_discount' => 87,
            'category_id' => 1,
            'is_active' => true,
            'notes' => 'notes about product 1',
        ]);
        $product4 = Product::create([
            'name' => 'منتج رابع ',
            'photo' => ' photo 4',
            'main_price' => 45,
            'main_discount' => 87,
            'category_id' => 1,
            'is_active' => true,
            'notes' => 'notes about product 4',
        ]);
    }
}
