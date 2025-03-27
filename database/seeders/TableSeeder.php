<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class TableSeeder extends Seeder
{
    public function run()
    {
        Category::create(['features' => 'Model', 'description' => 'Represents the data and business logic of the application, interacting with the database.']);
        Category::create(['features' => 'View', 'description' => 'Displays the user interface, presenting data retrieved by the controller using Blade templates.']);
        Category::create(['features' => 'Controller', 'description' => 'Handles incoming HTTP requests, processes data through models, and returns responses or views.']);
        Category::create(['features' => 'Routes', 'description' => 'Define the URL patterns and link them to specific controllers or closures for handling requests.']);
        Category::create(['features' => 'Middleware', 'description' => 'Filters and processes HTTP requests before they reach controllers, adding security and functionality.']);
        Category::create(['features' => 'Blade Templates', 'description' => 'Laravel’s templating engine for creating dynamic HTML content with reusable components.']);
        Category::create(['features' => 'Migrations', 'description' => 'Version-controlled scripts that manage and modify the database schema.']);
        Category::create(['features' => 'Seeders', 'description' => 'Populate the database with sample or initial data for testing and development.']);
        Category::create(['features' => 'Database', 'description' => 'Stores application data and structures managed through migrations and models.']);
        Category::create(['features' => 'Eloquent ORM', 'description' => 'Laravel’s Object-Relational Mapping system to interact with the database using models.']);
    }
}
