<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariantPrice extends Model
{
    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
