<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsCommentsLike
 * 
 * @property int $id
 * @property int $user_id
 * @property int $comm_id
 *
 * @package App\Models
 */
class WsCommentsLike extends Model
{
	protected $table = 'ws_comments_likes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'user_id' => 'int',
		'comm_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'comm_id'
	];
}
