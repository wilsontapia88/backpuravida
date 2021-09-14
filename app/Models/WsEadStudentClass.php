<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadStudentClass
 * 
 * @property int|null $user_id
 * @property int|null $course_id
 * @property int|null $class_id
 * @property int|null $enrollment_id
 * @property int $student_class_id
 * @property int|null $student_class_views
 * @property Carbon|null $student_class_play
 * @property int|null $student_class_free
 * @property int|null $student_class_seconds
 * @property Carbon|null $student_class_check
 *
 * @package App\Models
 */
class WsEadStudentClass extends Model
{
	protected $table = 'ws_ead_student_classes';
	protected $primaryKey = 'student_class_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'course_id' => 'int',
		'class_id' => 'int',
		'enrollment_id' => 'int',
		'student_class_id' => 'int',
		'student_class_views' => 'int',
		'student_class_free' => 'int',
		'student_class_seconds' => 'int'
	];

	protected $dates = [
		'student_class_play',
		'student_class_check'
	];

	protected $fillable = [
		'user_id',
		'course_id',
		'class_id',
		'enrollment_id',
		'student_class_views',
		'student_class_play',
		'student_class_free',
		'student_class_seconds',
		'student_class_check'
	];
}
