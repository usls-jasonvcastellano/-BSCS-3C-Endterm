<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
   public function viewProducts(){
        return view('products.view', [
            'product_items' => [
               'item_1' => [
                  'id' => '001',
                  'name' => 'Essence Mascara Lash Princess',
                  'description' => 'The Essence Mascara Lash Princess is a popular mascara known for its volumizing and lengthening effects. Achieve dramatic lashes with this long-lasting and cruelty-free formula.',
                  'price' => '1500',
                  'qty' => '2'
               ],
               'item_2' => [
                  'id' => '002',
                  'name' => 'iPhone 9',
                  'description' => 'An apple mobile which is nothing like apple',
                  'price' => '35000',
                  'qty' => '7'
               ],
               'item_3' => [
                  'id' => '004',
                  'name' => 'iPhone X',
                  'description' => 'SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with ...',
                  'price' => '1500',
                  'qty' => '2'
               ],
               'item_4' => [
                  'id' => '004',
                  'name' => 'Samsung Universe 9',
                  'description' => 'Samsung\'s new variant which goes beyond Galaxy to the Universe',
                  'price' => '1500',
                  'qty' => '2'
               ]
            ]
        ]);
   }
}
