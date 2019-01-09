<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProductImage extends Model
{
    public $timestamps = false;

    public function productId () {
    	return $this->belongsTo(Product::class);
    }
}
