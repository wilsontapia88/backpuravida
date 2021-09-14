<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsOrder
 * 
 * @property int|null $user_id
 * @property int $order_id
 * @property int $order_status
 * @property int $order_payment
 * @property float $order_price
 * @property float|null $order_installments
 * @property float|null $order_installment
 * @property float|null $order_coupon
 * @property float|null $order_free
 * @property string|null $order_billet
 * @property string|null $order_code
 * @property int|null $order_addr
 * @property int|null $order_shipcode
 * @property float|null $order_shipprice
 * @property Carbon|null $order_shipment
 * @property string|null $order_tracking
 * @property string|null $order_nfepdf
 * @property string|null $order_nfexml
 * @property Carbon|null $order_date
 * @property Carbon|null $order_update
 * @property int|null $order_mail_processing
 * @property int|null $order_mail_completed
 *
 * @package App\Models
 */
class WsOrder extends Model
{
	protected $table = 'ws_orders';
	protected $primaryKey = 'order_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'order_id' => 'int',
		'order_status' => 'int',
		'order_payment' => 'int',
		'order_price' => 'float',
		'order_installments' => 'float',
		'order_installment' => 'float',
		'order_coupon' => 'float',
		'order_free' => 'float',
		'order_addr' => 'int',
		'order_shipcode' => 'int',
		'order_shipprice' => 'float',
		'order_mail_processing' => 'int',
		'order_mail_completed' => 'int'
	];

	protected $dates = [
		'order_shipment',
		'order_date',
		'order_update'
	];

	protected $fillable = [
		'user_id',
		'order_status',
		'order_payment',
		'order_price',
		'order_installments',
		'order_installment',
		'order_coupon',
		'order_free',
		'order_billet',
		'order_code',
		'order_addr',
		'order_shipcode',
		'order_shipprice',
		'order_shipment',
		'order_tracking',
		'order_nfepdf',
		'order_nfexml',
		'order_date',
		'order_update',
		'order_mail_processing',
		'order_mail_completed'
	];
}
