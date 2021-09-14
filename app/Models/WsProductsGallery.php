<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsProductsGallery
 * 
 * @property int $product_id
 * @property int $id
 * @property string|null $image
 *
 * @package App\Models
 */
class WsProductsGallery extends Model
{
	protected $table = 'ws_products_gallery';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'id' => 'int'
	];

	protected $fillable = [
		'product_id',
		'image'
	];
}
