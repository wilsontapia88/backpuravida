<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsProductsCoupon
 * 
 * @property int $cp_id
 * @property string|null $cp_title
 * @property string|null $cp_coupon
 * @property float|null $cp_discount
 * @property Carbon|null $cp_start
 * @property Carbon|null $cp_end
 * @property float|null $cp_hits
 *
 * @package App\Models
 */
class WsProductsCoupon extends Model
{
	protected $table = 'ws_products_coupons';
	protected $primaryKey = 'cp_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cp_id' => 'int',
		'cp_discount' => 'float',
		'cp_hits' => 'float'
	];

	protected $dates = [
		'cp_start',
		'cp_end'
	];

	protected $fillable = [
		'cp_title',
		'cp_coupon',
		'cp_discount',
		'cp_start',
		'cp_end',
		'cp_hits'
	];
}
