<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ws_ead_professional extends Model
{
    protected $fillable = [
        'pro_photo',
        'pro_thumb',
        'pro_name',
        'pro_lastname',
        'pro_prof',
        'pro_city',
        'pro_state',
        'pro_phone',
        'pro_email',
        'pro_site',
        'pro_face',
        'pro_insta',
        'pro_status',
        'pro_form',
        'pro_created',
    ];
}
