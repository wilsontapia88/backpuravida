<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadCoursesMaterial
 * 
 * @property int $course_id
 * @property int $module_id
 * @property int|null $class_id
 * @property int $material_id
 * @property string|null $material_title
 * @property string|null $material_thumb
 * @property string|null $material_file
 * @property string|null $material_type
 * @property int $material_order
 * @property Carbon|null $material_sended
 *
 * @package App\Models
 */
class WsEadCoursesMaterial extends Model
{
	protected $table = 'ws_ead_courses_material';
	protected $primaryKey = 'material_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'module_id' => 'int',
		'class_id' => 'int',
		'material_id' => 'int',
		'material_order' => 'int'
	];

	protected $dates = [
		'material_sended'
	];

	protected $fillable = [
		'course_id',
		'module_id',
		'class_id',
		'material_title',
		'material_thumb',
		'material_file',
		'material_type',
		'material_order',
		'material_sended'
	];
}
