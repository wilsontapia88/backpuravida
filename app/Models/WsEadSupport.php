<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadSupport
 * 
 * @property int|null $user_id
 * @property int|null $enrollment_id
 * @property int|null $class_id
 * @property int $support_id
 * @property string|null $support_content
 * @property int|null $support_status
 * @property Carbon|null $support_open
 * @property Carbon|null $support_reply
 * @property Carbon|null $support_close
 * @property int|null $support_review
 * @property string|null $support_comment
 * @property int|null $support_published
 *
 * @package App\Models
 */
class WsEadSupport extends Model
{
	protected $table = 'ws_ead_support';
	protected $primaryKey = 'support_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'enrollment_id' => 'int',
		'class_id' => 'int',
		'support_id' => 'int',
		'support_status' => 'int',
		'support_review' => 'int',
		'support_published' => 'int'
	];

	protected $dates = [
		'support_open',
		'support_reply',
		'support_close'
	];

	protected $fillable = [
		'user_id',
		'enrollment_id',
		'class_id',
		'support_content',
		'support_status',
		'support_open',
		'support_reply',
		'support_close',
		'support_review',
		'support_comment',
		'support_published'
	];
}
