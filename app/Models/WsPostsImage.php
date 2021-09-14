<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsPostsImage
 * 
 * @property int|null $post_id
 * @property int $id
 * @property string|null $image
 *
 * @package App\Models
 */
class WsPostsImage extends Model
{
	protected $table = 'ws_posts_images';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'post_id',
		'image'
	];
}
