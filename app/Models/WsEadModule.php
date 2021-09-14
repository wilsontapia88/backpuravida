<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadModule
 * 
 * @property int|null $course_id
 * @property int $module_id
 * @property string|null $module_title
 * @property string|null $module_thumb
 * @property string|null $module_desc
 * @property string|null $module_desc_vv
 * @property string $module_faq
 * @property string|null $module_name
 * @property int $module_order
 * @property string $module_active
 * @property int $module_release
 * @property Carbon|null $module_release_date
 * @property int|null $module_required
 * @property Carbon|null $module_created
 *
 * @package App\Models
 */
class WsEadModule extends Model
{
	protected $table = 'ws_ead_modules';
	protected $primaryKey = 'module_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'module_id' => 'int',
		'module_order' => 'int',
		'module_release' => 'int',
		'module_required' => 'int'
	];

	protected $dates = [
		'module_release_date',
		'module_created'
	];

	protected $fillable = [
		'course_id',
		'module_title',
		'module_thumb',
		'module_desc',
		'module_desc_vv',
		'module_faq',
		'module_name',
		'module_order',
		'module_active',
		'module_release',
		'module_release_date',
		'module_required',
		'module_created'
	];
}
