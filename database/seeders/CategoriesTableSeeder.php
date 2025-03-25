<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Technology', 'description' => 'Latest gadgets and software.'],
            ['id' => 2, 'name' => 'Health', 'description' => 'Health and wellness products.'],
            ['id' => 3, 'name' => 'Education', 'description' => 'Books and learning materials.'],
            ['id' => 4, 'name' => 'Fashion', 'description' => 'Trendy clothing and accessories.'],
            ['id' => 5, 'name' => 'Food', 'description' => 'Delicious and fresh food items.'],
        ]);
    }
}