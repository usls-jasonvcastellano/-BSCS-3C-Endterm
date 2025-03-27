<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            ['name' => 'Smartphone', 'category_id' => 1, 'stock' => 10, 'price' => 699.99],
            ['name' => 'Sofa', 'category_id' => 2, 'stock' => 5, 'price' => 1200.00],
            ['name' => 'T-Shirt', 'category_id' => 3, 'stock' => 20, 'price' => 19.99],
            ['name' => 'Novel', 'category_id' => 4, 'stock' => 15, 'price' => 9.99],
            ['name' => 'Milk', 'category_id' => 5, 'stock' => 50, 'price' => 1.99],
        ]);
    }
}
