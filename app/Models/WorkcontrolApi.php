<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WorkcontrolApi
 * 
 * @property int $api_id
 * @property string|null $api_key
 * @property string|null $api_token
 * @property Carbon|null $api_date
 * @property int|null $api_status
 * @property int|null $api_loads
 * @property Carbon|null $api_lastload
 *
 * @package App\Models
 */
class WorkcontrolApi extends Model
{
	protected $table = 'workcontrol_api';
	protected $primaryKey = 'api_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'api_id' => 'int',
		'api_status' => 'int',
		'api_loads' => 'int'
	];

	protected $dates = [
		'api_date',
		'api_lastload'
	];

	protected $hidden = [
		'api_token'
	];

	protected $fillable = [
		'api_key',
		'api_token',
		'api_date',
		'api_status',
		'api_loads',
		'api_lastload'
	];
}
