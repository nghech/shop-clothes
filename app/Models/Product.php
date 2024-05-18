<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'brand',
        'category_id',
        'price',
        'description',
        'thumbnail_url',
        'created_at',
        'updated_at'
    ];

    public function quantities()
    {
      return $this->hasMany(Quantity::class);
    }
}
