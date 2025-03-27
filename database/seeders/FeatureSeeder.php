<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    public function run()
    {
        $features =[
            ['name' => 'Model','description'=>'Represents data and then interacts with the database.'],
            ['name' => 'View','description'=>'Displays the data using blade templates.'],
            ['name' => 'Controller','description'=>'Handles application logic and user requests.'],
            ['name' => 'Routes','description'=>'define the URLs the application responds to and the actions that are taken when those URLs are accessed.'],
            ['name' => 'Middleware','description'=>'mechanism for filtering and processing HTTP requests and responses during the request lifecycle.'],
            ['name' => 'Blade Templates','description'=>'templating engine for creating dynamic and reusable views with simple syntax.'],
            ['name' => 'Migrations','description'=>'defines and modify database schema using PHP code.'],
            ['name' => 'Seeders','description'=>'used to populate the database with test or sample data.'],
            ['name' => 'Database','description'=>'manages and queries stored data efficiently.'],
            ['name' => 'Eloquent ORM','description'=>"Laravel's built-in object-relational mapper, used to interact with databases using PHP syntax."]
        ];
        foreach ($features as $feature){
            Feature::create($feature);
        }
    }
}
