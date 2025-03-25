<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
     {
         DB::table('items')->insert([
             ['name' => 'Laptop', 'price' => 999.99, 'category_id' => 1], // Technology
             ['name' => 'Vitamins', 'price' => 19.99, 'category_id' => 2], // Health
             ['name' => 'Math Textbook', 'price' => 49.99, 'category_id' => 3], // Education
             ['name' => 'T-Shirt', 'price' => 25.99, 'category_id' => 4], // Fashion
             ['name' => 'Pizza', 'price' => 12.99, 'category_id' => 5], // Food
         ]);
     }
 }