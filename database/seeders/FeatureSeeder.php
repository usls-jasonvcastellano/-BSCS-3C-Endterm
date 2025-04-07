<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        DB::table('tbl_features')->insert([
            ['name' => 'Product 1', 'description' => 'Blank'],
            ['name' => 'Product 2', 'description' => 'Blank'],
            ['name' => 'Product 3', 'description' => 'Blank'],
            ['name' => 'Product 4', 'description' => 'Blank'],
            ['name' => 'Product 5', 'description' => 'Blank'],
            ['name' => 'Product 6', 'description' => 'Blank'],
            ['name' => 'Product 7', 'description' => 'Blank'],
            ['name' => 'Product 8', 'description' => 'Blank'],
            ['name' => 'Product 9', 'description' => 'Blank'],
            ['name' => 'Product 10', 'description' => 'Blank'],
        ]);
    }
}
