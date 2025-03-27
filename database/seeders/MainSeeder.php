<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainSeeder extends Seeder
{
    public function run()
    {
        DB::table('tbl_features')->insert([
            ['id' => 1, 'feature_name' => 'Model', 'description'=> 'Connects Laravel to the Database.'],
            ['id' => 2, 'feature_name' => 'View', 'description'=> 'Ables tp displays the blade.php to the browser.'],
            ['id' => 3, 'feature_name' => 'Controller', 'description'=> 'Inteacts with models and view.s'],
            ['id' => 4, 'feature_name' => 'Routes', 'description'=> 'HTTP Request to Controllers'],
            ['id' => 5, 'feature_name' => 'Middlewear', 'description'=> 'Software between Operating Systen and Running Application'],
            ['id' => 6, 'feature_name' => 'Blade Templates', 'description'=> 'Allows to php to use Laravel Features'],
            ['id' => 7, 'feature_name' => 'Migrations', 'description'=> 'Manage and Structures Database'],
            ['id' => 8, 'feature_name' => 'Seeders', 'description'=> 'Seeds informations to the database.'],
            ['id' => 9, 'feature_name' => 'Database', 'description'=> 'Holds all the data.'],
            ['id' => 10, 'feature_name' => 'Eloquent ORM', 'description'=> 'Allows to interact to your database using object-oriented syntax'],
        ]);
    }
}
