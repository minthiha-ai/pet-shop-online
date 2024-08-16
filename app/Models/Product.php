<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'price', 'description', 'sku', 'availability', 'tag', 'addional_info', 'stock', 'images'];

    protected $casts = [
        'images' => 'array'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
