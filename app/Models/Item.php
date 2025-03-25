<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items'; // Table name

    protected $fillable = [
        'category_id',
        'name',
        'quantity',
        'price',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
