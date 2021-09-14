<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadFastpass
 * 
 * @property int $fastpass_id
 * @property int $user_id
 * @property int $course_id
 * @property int $module_id
 * @property Carbon $fastpass_date
 *
 * @package App\Models
 */
class WsEadFastpass extends Model
{
	protected $table = 'ws_ead_fastpass';
	protected $primaryKey = 'fastpass_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'fastpass_id' => 'int',
		'user_id' => 'int',
		'course_id' => 'int',
		'module_id' => 'int'
	];

	protected $dates = [
		'fastpass_date'
	];

	protected $fillable = [
		'user_id',
		'course_id',
		'module_id',
		'fastpass_date'
	];
}
