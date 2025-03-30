<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeed extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'category' => 'Powder',
                'itemname' => 'Eternal Powder',
                'price' => 20.99,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Lipstick',
                'itemname' => 'Eternal Lipstick',
                'price' => 19.99,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Highlighter',
                'itemname' => 'Eternal Highliter',
                'price' => 18.99,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Blush',
                'itemname' => 'Eternal Blush',
                'price' => 17.99,
                'quantity' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Lip Gloss',
                'itemname' => 'Eternal Gloss',
                'price' => 13.99,
                'quantity' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Concealer',
                'itemname' => 'Eternal Concealer',
                'price' => 16.99,
                'quantity' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category' => 'Eyebrow Pen',
                'itemname' => 'Eternal Pen',
                'price' => 10.99,
                'quantity' => 51,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
