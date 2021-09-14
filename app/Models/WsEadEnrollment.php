<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadEnrollment
 * 
 * @property int|null $user_id
 * @property int|null $course_id
 * @property int $enrollment_id
 * @property int|null $enrollment_order
 * @property int|null $enrollment_bonus
 * @property int|null $enrollment_group
 * @property Carbon|null $enrollment_start
 * @property Carbon|null $enrollment_access
 * @property Carbon|null $enrollment_end
 * @property int|null $enrollment_introcourse_watched
 *
 * @package App\Models
 */
class WsEadEnrollment extends Model
{
	protected $table = 'ws_ead_enrollments';
	protected $primaryKey = 'enrollment_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'course_id' => 'int',
		'enrollment_id' => 'int',
		'enrollment_order' => 'int',
		'enrollment_bonus' => 'int',
		'enrollment_group' => 'int',
		'enrollment_introcourse_watched' => 'int'
	];

	protected $dates = [
		'enrollment_start',
		'enrollment_access',
		'enrollment_end'
	];

	protected $fillable = [
		'user_id',
		'course_id',
		'enrollment_order',
		'enrollment_bonus',
		'enrollment_group',
		'enrollment_start',
		'enrollment_access',
		'enrollment_end',
		'enrollment_introcourse_watched'
	];
}
