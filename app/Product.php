<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','quantity','ingredient','subingredient','description','image1','image2','image3'
    ];
}
