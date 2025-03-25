<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['last_name' => 'Rafols', 'first_name' => 'Rafael', 'ign' => 'Koffi'],
            ['last_name' => 'Castro', 'first_name' => 'Wilkins', 'ign' => 'Lemon'],
            ['last_name' => 'Uy', 'first_name' => 'Rhenzal', 'ign' => 'Yamjago'],
            ['last_name' => 'Permison', 'first_name' => 'Aldec', 'ign' => 'Bubble'],
        ]);
    }
}
