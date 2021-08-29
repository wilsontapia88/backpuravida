<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ws_ead_courses_material extends Model
{
    protected $fillable = [
        'course_id',
        'module_id',
        'class_id',
        'material_title',
        'material_thumb',
        'material_file',
        'material_type',
        'material_order',
        'material_sended',
    ];
}
