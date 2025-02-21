<?php

namespace Database\Seeders; 

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // Disable foreign key checks temporarily
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Use DELETE instead of TRUNCATE
        DB::table('categories')->delete();

        // Reset auto-increment
        DB::statement('ALTER TABLE categories AUTO_INCREMENT = 1;');

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert categories
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Technology', 'description' => 'Latest gadgets and software.'],
            ['id' => 2, 'name' => 'Health', 'description' => 'Tips and products for a healthy life.'],
            ['id' => 3, 'name' => 'Education', 'description' => 'Resources for students and teachers.'],
        ]);
    }
}

