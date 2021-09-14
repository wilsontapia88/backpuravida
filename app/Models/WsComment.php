<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsComment
 * 
 * @property int $id
 * @property int|null $user_id
 * @property int|null $post_id
 * @property int|null $pdt_id
 * @property int|null $page_id
 * @property int|null $alias_id
 * @property string|null $comment
 * @property float|null $rank
 * @property Carbon|null $created
 * @property Carbon|null $interact
 * @property int $status
 * @property float $likes
 *
 * @package App\Models
 */
class WsComment extends Model
{
	protected $table = 'ws_comments';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'user_id' => 'int',
		'post_id' => 'int',
		'pdt_id' => 'int',
		'page_id' => 'int',
		'alias_id' => 'int',
		'rank' => 'float',
		'status' => 'int',
		'likes' => 'float'
	];

	protected $dates = [
		'created',
		'interact'
	];

	protected $fillable = [
		'user_id',
		'post_id',
		'pdt_id',
		'page_id',
		'alias_id',
		'comment',
		'rank',
		'created',
		'interact',
		'status',
		'likes'
	];
}
