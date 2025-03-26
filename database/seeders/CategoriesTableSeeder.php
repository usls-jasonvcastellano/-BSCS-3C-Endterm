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
        
        DB::table("categories")->insert(
            [
                ['id' => 1, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Business', 'description' => 'Insights and trends in the business world.'],
                ['id' => 2, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Entertainment', 'description' => 'Movies, music, and celebrity news.'],
                ['id' => 3, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Sports', 'description' => 'Latest updates on various sports and athletes.'],
                ['id' => 4, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Travel', 'description' => 'Destinations, tips, and travel guides.'],
                ['id' => 5, 'created_at' => now(), 'updated_at' => now(), 'name' => 'Food', 'description' => 'Recipes, restaurant reviews, and cooking tips.']
            ]            
        );

    }
}
