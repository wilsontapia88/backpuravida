<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsProductsBrand
 * 
 * @property int $brand_id
 * @property string|null $brand_title
 * @property string|null $brand_name
 * @property Carbon|null $brand_created
 *
 * @package App\Models
 */
class WsProductsBrand extends Model
{
	protected $table = 'ws_products_brands';
	protected $primaryKey = 'brand_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'brand_id' => 'int'
	];

	protected $dates = [
		'brand_created'
	];

	protected $fillable = [
		'brand_title',
		'brand_name',
		'brand_created'
	];
}
