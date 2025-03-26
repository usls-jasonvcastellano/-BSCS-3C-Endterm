<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categories = DB::table("categories")->get();

        foreach($categories as $cat){
            DB::table("items")->insert(
                [
                    'category_id' => $cat->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                    'name' => $faker->name,
                    'price' => $faker->randomDigit()            
                ]
            );
        }
      
    }
}
