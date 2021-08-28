<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_siteviews_online extends Model
{
    protected $fillable = [
        'online_id',
        'online_user',
        'online_name',
        'online_startview',
        'online_endview',
        'online_ip',
        'online_url',
        'online_agent'
    ];
}
