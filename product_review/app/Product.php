<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    public function disable(){
        $this->is_active = false;
        $this->save();
    }

    public function reviews(){
        return $this->hasMany(ProductReview::class);
    }

}
