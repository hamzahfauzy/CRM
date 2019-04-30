<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function category()
    {
    	return $this->hasOne(Category::class);
    }

    public function productImages()
    {
    	return $this->hasMany(ProductImage::class);
    }
}