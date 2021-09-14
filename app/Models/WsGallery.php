<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsGallery
 * 
 * @property int $gallery_image_id
 * @property int $gallery_id
 * @property string $gallery_image
 * @property string $gallery_image2x
 *
 * @package App\Models
 */
class WsGallery extends Model
{
	protected $table = 'ws_gallery';
	protected $primaryKey = 'gallery_image_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'gallery_image_id' => 'int',
		'gallery_id' => 'int'
	];

	protected $fillable = [
		'gallery_id',
		'gallery_image',
		'gallery_image2x'
	];
}
