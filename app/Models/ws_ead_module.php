<?php

namespace App\Models;
use App\Models\ws_ead_course;
use App\Models\ws_ead_classe;

use Illuminate\Database\Eloquent\Model;

class ws_ead_module extends Model
{
    protected $fillable = [
        'module_title',
        'module_thumb',
        'module_desc',
        'module_desc_vv',
        'module_faq',
        'module_name',
        'module_order',
        'module_active',
        'module_release',
        'module_release_date',
        'module_required',
    ];

    public function courses()
    {
        return $this->belongsTo(ws_ead_course::class);
    }


    public function clases()
    {
        return $this->hasMany(ws_ead_classe::class);
    }
}
