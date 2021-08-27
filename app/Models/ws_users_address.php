<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ws_users_address extends Model
{
    protected $fillable = [
        'user_id',
        'addr_key',
        'addr_name',
        'addr_zipcode',
        'addr_street',
        'addr_number',
        'addr_complement',
        'addr_district',
        'addr_city',
        'addr_state',
        'addr_country',
    ];
}
