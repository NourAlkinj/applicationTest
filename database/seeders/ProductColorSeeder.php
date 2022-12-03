<?php

namespace Database\Seeders;

use App\Models\ProductColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductColorSeeder extends Seeder
{

    public function run()
    {
        $productColor1 = ProductColor::create([

            'size' => 'لون 1 ',
            'product_id' => 3,

        ]);
        $productColor2 = ProductColor::create([

            'size' => 'لون 2 ',
            'product_id' => 2,

        ]);
        $productColor3 = ProductColor::create([

            'size' => 'لون 3 ',
            'product_id' => 3,

        ]);
    }
}
