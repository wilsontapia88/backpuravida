<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadStudentCertificate
 * 
 * @property int|null $user_id
 * @property int|null $course_id
 * @property int|null $enrollment_id
 * @property int $certificate_id
 * @property string|null $certificate_key
 * @property Carbon|null $certificate_issued
 * @property int $certificate_status
 *
 * @package App\Models
 */
class WsEadStudentCertificate extends Model
{
	protected $table = 'ws_ead_student_certificates';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'course_id' => 'int',
		'enrollment_id' => 'int',
		'certificate_id' => 'int',
		'certificate_status' => 'int'
	];

	protected $dates = [
		'certificate_issued'
	];

	protected $fillable = [
		'user_id',
		'course_id',
		'enrollment_id',
		'certificate_id',
		'certificate_key',
		'certificate_issued',
		'certificate_status'
	];
}
