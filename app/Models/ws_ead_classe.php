<?php

namespace App\Models;
use App\Models\ws_ead_module;

use Illuminate\Database\Eloquent\Model;

class ws_ead_classe extends Model
{
    protected $fillable = [
        'course_id',
        'module_id',
        'class_id',
        'class_title',
        'class_thumb',
        'class_name',
        'class_video',
        'class_time',
        'class_order',
        'class_active',
        'class_material',
        'class_desc',
        'class_support',
    ];

    public function module()
    {
        return $this->belongsTo(ws_ead_module::class);
    }
}
