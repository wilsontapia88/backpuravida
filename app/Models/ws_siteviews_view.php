<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_siteviews_view extends Model
{
    protected $fillable = [
        'views_id',
        'views_date',
        'views_users',
        'views_views',
        'views_pages'
    ];

}
