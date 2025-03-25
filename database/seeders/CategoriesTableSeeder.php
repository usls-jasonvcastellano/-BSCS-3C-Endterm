<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['id' => 1, 'category_name' => 'Technology', 'description' => 'Latest gadgets and software.'],
            ['id' => 2, 'category_name' => 'Health', 'description' => 'Tips and products for a healthy life.'],
            ['id' => 3, 'category_name' => 'Education', 'description' => 'Resources for students and teachers.'],
        ]);
    }
}

