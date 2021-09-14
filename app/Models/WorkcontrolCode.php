<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkcontrolCode
 * 
 * @property int $code_id
 * @property string|null $code_name
 * @property string|null $code_condition
 * @property string|null $code_script
 * @property Carbon|null $code_created
 * @property float $code_views
 *
 * @package App\Models
 */
class WorkcontrolCode extends Model
{
	protected $table = 'workcontrol_code';
	protected $primaryKey = 'code_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'code_id' => 'int',
		'code_views' => 'float'
	];

	protected $dates = [
		'code_created'
	];

	protected $fillable = [
		'code_name',
		'code_condition',
		'code_script',
		'code_created',
		'code_views'
	];
}
