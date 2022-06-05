<?php

namespace App\Models;

use App\Casts\FloatToInteger;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'price',
        'category_id',
        'image',
    ];

    protected $casts = [
        'price' => FloatToInteger::class
    ];


    public function ProductCategory(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id', 'id');
    }

    public function CartItem(): hasOne
    {
        return $this->hasOne(CartItem::class);
    }



}
