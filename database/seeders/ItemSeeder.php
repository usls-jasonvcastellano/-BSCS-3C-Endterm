<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        $categories = DB::table('categories')->get();

        foreach ($categories as $category) {
            DB::table('items')->insert([
                'name' => $category->name . ' Item', // Create a name for the item
                'price' => rand(100, 1000), // Random price between 100 and 1000
                'category_id' => $category->id, // Set the category_id to match the category
            ]);
        }
    }
}
