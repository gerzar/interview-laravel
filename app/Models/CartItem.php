<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id'
    ];



    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }


    public function Category(): hasManyThrough
    {
        return $this->hasOneThrough(
            ProductCategory::class,
            Product::class,
            'category_id',
            'id',
            'id',
            'id'
        );
    }

}
