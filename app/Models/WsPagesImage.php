<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsPagesImage
 * 
 * @property int $page_id
 * @property int $id
 * @property string|null $image
 *
 * @package App\Models
 */
class WsPagesImage extends Model
{
	protected $table = 'ws_pages_images';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'page_id' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'page_id',
		'image'
	];
}
