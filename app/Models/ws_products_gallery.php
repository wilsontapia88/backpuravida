<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_products_gallery extends Model
{
    protected $fillable = [
        'product_id',
        'image'
    ];
}
