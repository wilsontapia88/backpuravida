<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadSupportReply
 * 
 * @property int|null $user_id
 * @property int|null $enrollment_id
 * @property int|null $support_id
 * @property int $response_id
 * @property string|null $response_content
 * @property Carbon|null $response_open
 *
 * @package App\Models
 */
class WsEadSupportReply extends Model
{
	protected $table = 'ws_ead_support_reply';
	protected $primaryKey = 'response_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'enrollment_id' => 'int',
		'support_id' => 'int',
		'response_id' => 'int'
	];

	protected $dates = [
		'response_open'
	];

	protected $fillable = [
		'user_id',
		'enrollment_id',
		'support_id',
		'response_content',
		'response_open'
	];
}
