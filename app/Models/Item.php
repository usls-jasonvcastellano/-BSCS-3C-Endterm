<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    // Add attributes like fillable or guarded if necessary
    protected $fillable = ['item_name', 'qty', 'price', 'category_id'];
}