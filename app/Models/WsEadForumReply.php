<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadForumReply
 * 
 * @property int|null $user_id
 * @property int|null $enrollment_id
 * @property int|null $forum_id
 * @property int $response_id
 * @property string|null $response_content
 * @property Carbon|null $response_open
 *
 * @package App\Models
 */
class WsEadForumReply extends Model
{
	protected $table = 'ws_ead_forum_reply';
	protected $primaryKey = 'response_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'enrollment_id' => 'int',
		'forum_id' => 'int',
		'response_id' => 'int'
	];

	protected $dates = [
		'response_open'
	];

	protected $fillable = [
		'user_id',
		'enrollment_id',
		'forum_id',
		'response_content',
		'response_open'
	];
}
