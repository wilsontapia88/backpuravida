<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_products_brand extends Model
{
    protected $fillable = [
        'brand_id',
        'brand_title',
        'brand_name',
        'brand_created'
    ];
}
