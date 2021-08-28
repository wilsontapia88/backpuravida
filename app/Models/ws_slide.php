<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ws_slide extends Model
{
    protected $fillable = [
        'slide_id',
        'slide_status',
        'slide_image',
        'slide_title',
        'slide_desc',
        'slide_link',
        'slide_date',
        'slide_start',
        'slide_end'
    ];
}
