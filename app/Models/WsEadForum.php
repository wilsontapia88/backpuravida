<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadForum
 * 
 * @property int|null $user_id
 * @property int|null $enrollment_id
 * @property int|null $class_id
 * @property int $forum_id
 * @property string|null $forum_content
 * @property int|null $forum_status
 * @property Carbon|null $forum_open
 * @property Carbon|null $forum_reply
 * @property Carbon|null $forum_close
 * @property int|null $forum_review
 * @property string|null $forum_comment
 * @property int|null $forum_published
 *
 * @package App\Models
 */
class WsEadForum extends Model
{
	protected $table = 'ws_ead_forum';
	protected $primaryKey = 'forum_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'enrollment_id' => 'int',
		'class_id' => 'int',
		'forum_id' => 'int',
		'forum_status' => 'int',
		'forum_review' => 'int',
		'forum_published' => 'int'
	];

	protected $dates = [
		'forum_open',
		'forum_reply',
		'forum_close'
	];

	protected $fillable = [
		'user_id',
		'enrollment_id',
		'class_id',
		'forum_content',
		'forum_status',
		'forum_open',
		'forum_reply',
		'forum_close',
		'forum_review',
		'forum_comment',
		'forum_published'
	];
}
