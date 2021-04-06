<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'product_categories_id',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_categories_id');
    }
}
