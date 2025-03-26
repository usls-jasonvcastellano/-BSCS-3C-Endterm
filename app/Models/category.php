<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories'; // Ensure this matches your database table name
    protected $fillable = ['name']; // Add columns you want to allow mass assignment
}
