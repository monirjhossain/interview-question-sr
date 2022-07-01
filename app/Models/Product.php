<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'sku', 'description',
    ];

     public function variants()
    {
        return $this->belongsToMany(Variant::class,'product_variants');
    }

    public function productVariantPrice()
    {
        return $this->hasOne(ProductVariantPrice::class);
    }
}
