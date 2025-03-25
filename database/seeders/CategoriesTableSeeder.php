<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
  

    public function run(): void
        {
            DB::table('categories')->insert([
                ['id' => 1, 'categories_name' => 'Technology', 'description' => 'Latest gadgets and software.'],
                ['id' => 2, 'categories_name' => 'Health', 'description' => 'Tips and products for a healthy life.'],
                ['id' => 3, 'categories_name' => 'Education', 'description' => 'Resources for students and teachers.'],
            ]);
        }
    }
  

        

