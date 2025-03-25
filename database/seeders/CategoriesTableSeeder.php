<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'name' => Technology, 'description' => 'Latest gadgets and software.', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'Health', 'description' => 'Tips and products for a healthy life.','created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => 'Education', 'description' => 'Resources for students and teachers.','created_at' => now(), 'updated_at' => now()],
        ]);
    }
}