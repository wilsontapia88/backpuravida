<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WsQuestions extends Model
{
	protected $fillable = [
		'answer',
		'resp',
		'order',
		'active',
	];
}
