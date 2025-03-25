<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'categories';
    protected $fillable = ['last_name', 'first_name', 'ign'];
}
