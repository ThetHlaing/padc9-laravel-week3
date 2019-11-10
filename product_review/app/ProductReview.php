<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    //
    protected $fillable = [
        'product_name', 
        'review'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
