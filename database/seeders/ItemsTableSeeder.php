<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['name' => 'Laptop', 'price' => 599.99, 'category_id' => 1], // Technology
            ['name' => 'Food', 'price' => 799.99, 'category_id' => 2], // Health
            ['name' => 'books', 'price' => 25.00, 'category_id' => 3], // Education
            ['name' => 'test 1', 'price' => 15.00, 'category_id' => 4], // test 1
            ['name' => 'test 2', 'price' => 39.99, 'category_id' => 5], //  test 2
        ]);
    }
}
