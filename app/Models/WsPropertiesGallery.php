<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsPropertiesGallery
 * 
 * @property int|null $realty_id
 * @property int $id
 * @property string|null $image
 *
 * @package App\Models
 */
class WsPropertiesGallery extends Model
{
	protected $table = 'ws_properties_gallery';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'realty_id' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'realty_id',
		'image'
	];
}
