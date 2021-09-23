<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WsOptions extends Model
{
    protected $fillable = [
		'option_name',
		'response',
		'active',
		'question_id',
	];
}
