<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('features')->insert([
            ['Name' => 'Model', "Description" => 'Represents data and business logic.'],
            ['Name' => 'View', "Description" => 'Handles user interface and presentation.'],
            ['Name' => 'Controller', "Description" => 'Manages application logic and user input.'],
            ['Name' => 'Routes', "Description" => 'Defines URL patterns and request handling.'],
            ['Name' => 'Middleware', "Description" => 'Filters HTTP requests before processing.'],
            ['Name' => 'Blade templates', "Description" => 'Provides a simple yet powerful templating engine.'],
            ['Name' => 'Migrations', "Description" => 'Manages database schema changes in version control.'],
            ['Name' => 'Seeders', "Description" => 'Populates the database with test data.'],
            ['Name' => 'Database', "Description" => 'Stores and retrieves application data.'],
            ['Name' => 'Eloquent ORM', "Description" => 'Simplifies database interaction using models.'],

        ]);
    }
}
