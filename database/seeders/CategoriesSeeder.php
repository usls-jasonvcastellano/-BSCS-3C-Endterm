<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Electronics'],
            ['id' => 2, 'name' => 'Health'],
            ['id' => 3, 'name' => 'Education'],
        ]);
    }
}
