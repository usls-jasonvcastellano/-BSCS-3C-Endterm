<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Allow mass assignment for the following attributes
    protected $fillable = ['name', 'description'];
}