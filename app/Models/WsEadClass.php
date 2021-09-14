<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadClass
 * 
 * @property int|null $course_id
 * @property int|null $module_id
 * @property int $class_id
 * @property string|null $class_title
 * @property string|null $class_thumb
 * @property string|null $class_name
 * @property string|null $class_video
 * @property float|null $class_time
 * @property int|null $class_order
 * @property string $class_active
 * @property string|null $class_material
 * @property string|null $class_desc
 * @property int|null $class_support
 * @property Carbon|null $class_created
 * @property Carbon|null $class_updated
 *
 * @package App\Models
 */
class WsEadClass extends Model
{
	protected $table = 'ws_ead_classes';
	protected $primaryKey = 'class_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'module_id' => 'int',
		'class_id' => 'int',
		'class_time' => 'float',
		'class_order' => 'int',
		'class_support' => 'int'
	];

	protected $dates = [
		'class_created',
		'class_updated'
	];

	protected $fillable = [
		'course_id',
		'module_id',
		'class_title',
		'class_thumb',
		'class_name',
		'class_video',
		'class_time',
		'class_order',
		'class_active',
		'class_material',
		'class_desc',
		'class_support',
		'class_created',
		'class_updated'
	];
}
