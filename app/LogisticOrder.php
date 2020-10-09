<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogisticOrder extends Model
{
     protected $fillable = [
        'image','introduction','article',
    ];
}
