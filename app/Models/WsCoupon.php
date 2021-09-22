<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WsCoupon extends Model
{
    protected $fillable = [
		'name',
		'code',
        'status',
        'info'
	];

    protected $casts = [
        'info' => 'array',
    ];
}
