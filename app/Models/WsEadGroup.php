<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadGroup
 * 
 * @property int $group_id
 * @property string $group_title
 * @property Carbon $group_init
 *
 * @package App\Models
 */
class WsEadGroup extends Model
{
	protected $table = 'ws_ead_group';
	protected $primaryKey = 'group_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'group_id' => 'int'
	];

	protected $dates = [
		'group_init'
	];

	protected $fillable = [
		'group_title',
		'group_init'
	];
}
