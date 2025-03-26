<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    public function run()
    
    {
        DB::table('items')->insert([
            
                ['name' => 'Laptop', 'price' => 599.99, 'category_id' => 1,'created_at' => now(), 'updated_at' => now()], // Technology
                ['name' => 'Yoga Mat', 'price' => 25.00, 'category_id' => 2,'created_at' => now(), 'updated_at' => now()], // Health
                ['name' => 'Math Textbook', 'price' => 39.99, 'category_id' => 3,'created_at' => now(), 'updated_at' => now()], // Education
                ['name' => 'Budget Planner', 'price' => 12.99, 'category_id' => 4,'created_at' => now(), 'updated_at' => now()], // Finance
                ['name' => 'Headphones', 'price' => 49.99, 'category_id' => 5,'created_at' => now(), 'updated_at' => now()], // Entertainment
            
        ]);
    }
}