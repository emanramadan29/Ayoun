<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddProduct extends Model
{
    public function images()
    {
        return $this->hasMany(ProductImages::class);
    }
}
