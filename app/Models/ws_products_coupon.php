<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_products_coupon extends Model
{
    protected $fillable = [
        'cp_id',
        'cp_title',
        'cp_coupon',
        'cp_discount',
        'cp_start',
        'cp_end',
        'cp_hits'
    ];
}
