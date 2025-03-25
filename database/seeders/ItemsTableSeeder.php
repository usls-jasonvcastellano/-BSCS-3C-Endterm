<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('items')->insert([
            ['items_name' => 'Laptop', 'price' => 599.99, 'category_id' => 1], // Technology
            ['items_name' => 'Smartphone', 'price' => 799.99, 'category_id' => 1], // Technology
            ['items_name' => 'Yoga Mat', 'price' => 25.00, 'category_id' => 2], // Health
            ['items_name' => 'Vitamins', 'price' => 15.00, 'category_id' => 2], // Health
            ['items_name' => 'Math Textbook', 'price' => 39.99, 'category_id' => 3], // Education
            ['items_name' => 'Notebook', 'price' => 5.00, 'category_id' => 3], // Education
        ]);
    }
}
