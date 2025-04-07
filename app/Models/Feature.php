<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $table = 'tbl_features'; // Specify the table name
    protected $fillable = ['name', 'description']; // Fields that are mass assignable
}
