<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public  $fillable=['id','nameAr','nameEn','textAr','textEn','img','url'];
}
