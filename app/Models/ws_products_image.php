<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_products_image extends Model
{
    protected $fillable = [
        'product_id',
        'image'
    ];
}
