<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ws_ead_courses_segments extends Model
{
    protected $fillable = [
        'segment_title',
        'segment_name',
        'segment_desc',
        'segment_order',
        'segment_icon',
    ];
}
