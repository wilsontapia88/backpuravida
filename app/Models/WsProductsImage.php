<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsProductsImage
 * 
 * @property int $product_id
 * @property int $id
 * @property string|null $image
 *
 * @package App\Models
 */
class WsProductsImage extends Model
{
	protected $table = 'ws_products_images';
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
