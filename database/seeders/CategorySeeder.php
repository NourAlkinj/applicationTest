<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run()
    {
        $category1 = Category::create([

            'name' => 'category 1',
            'photo'=>'photo 1',
            'description'=>'description 1',


        ]);
    }
}
