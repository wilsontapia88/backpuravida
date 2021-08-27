<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_products_stock extends Model
{
    protected $fillable = [
        'stock_id',
        'pdt_id',
        'stock_code',
        'stock_inventory',
        'stock_sold'
    ];
}
