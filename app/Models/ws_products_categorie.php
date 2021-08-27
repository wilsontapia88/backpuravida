<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_products_categorie extends Model
{
    protected $fillable = [
        'cat_id',
        'cat_parent',
        'cat_title',
        'cat_name',
        'cat_sizes',
        'cat_created'
    ];
}
