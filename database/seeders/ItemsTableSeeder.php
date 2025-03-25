<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('items')->insert([
            ['name' => 'Laptop', 'price' => 1200, 'category_id' => 1],
            ['name' => 'Vitamins', 'price' => 20, 'category_id' => 2],
            ['name' => 'Textbook', 'price' => 50, 'category_id' => 3],
        ]);
    }
}
