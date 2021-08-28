<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_search extends Model
{
    protected $fillable = [
        'search_id',
        'search_key',
        'search_count',
        'search_date',
        'search_commit'
    ];
}
