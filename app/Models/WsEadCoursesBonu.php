<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadCoursesBonu
 * 
 * @property int|null $course_id
 * @property int $bonus_id
 * @property int|null $bonus_course_id
 * @property int|null $bonus_ever
 * @property Carbon|null $bonus_ever_date
 * @property int|null $bonus_wait
 *
 * @package App\Models
 */
class WsEadCoursesBonu extends Model
{
	protected $table = 'ws_ead_courses_bonus';
	protected $primaryKey = 'bonus_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'bonus_id' => 'int',
		'bonus_course_id' => 'int',
		'bonus_ever' => 'int',
		'bonus_wait' => 'int'
	];

	protected $dates = [
		'bonus_ever_date'
	];

	protected $fillable = [
		'course_id',
		'bonus_course_id',
		'bonus_ever',
		'bonus_ever_date',
		'bonus_wait'
	];
}
