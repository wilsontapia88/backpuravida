<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadStudentDownload
 * 
 * @property int|null $user_id
 * @property string|null $user_ip
 * @property int|null $course_id
 * @property int|null $class_id
 * @property int $download_id
 * @property string|null $download_file
 * @property string|null $download_filename
 * @property Carbon|null $download_date
 * @property string|null $user_location
 * @property int|null $module_id
 * @property int|null $material_id
 * @property string|null $download_filetype
 *
 * @package App\Models
 */
class WsEadStudentDownload extends Model
{
	protected $table = 'ws_ead_student_downloads';
	protected $primaryKey = 'download_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'course_id' => 'int',
		'class_id' => 'int',
		'download_id' => 'int',
		'module_id' => 'int',
		'material_id' => 'int'
	];

	protected $dates = [
		'download_date'
	];

	protected $fillable = [
		'user_id',
		'user_ip',
		'course_id',
		'class_id',
		'download_file',
		'download_filename',
		'download_date',
		'user_location',
		'module_id',
		'material_id',
		'download_filetype'
	];
}
