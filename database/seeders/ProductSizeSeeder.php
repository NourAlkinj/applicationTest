<?php

namespace Database\Seeders;

use App\Models\ProductSize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{

    public function run()
    {
        $productSize1 = ProductSize::create([

            'size' => 'قياس 1 ',
            'product_id' => 2,

        ]);
        $productSize2 = ProductSize::create([

            'size' => 'قياس 2 ',
            'product_id' => 1,

        ]);
        $productSize3 = ProductSize::create([

            'size' => 'منتج 3 ',
            'product_id' => 3,

        ]);
    }
}
