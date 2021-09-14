<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadOrder
 * 
 * @property int|null $user_id
 * @property int|null $course_id
 * @property int $order_id
 * @property int|null $order_product_id
 * @property string|null $order_transaction
 * @property int|null $order_callback_type
 * @property string|null $order_off
 * @property float $order_price
 * @property string|null $order_currency
 * @property string|null $order_payment_type
 * @property Carbon|null $order_purchase_date
 * @property Carbon|null $order_warranty_date
 * @property Carbon|null $order_confirmation_purchase_date
 * @property string|null $order_sck
 * @property string|null $order_src
 * @property string|null $order_aff
 * @property string|null $order_aff_name
 * @property string $order_cms_aff
 * @property float $order_cms_marketplace
 * @property float $order_cms_vendor
 * @property string|null $order_status
 * @property Carbon|null $order_chargeback
 * @property int|null $order_delivered
 * @property string|null $order_signature
 * @property string|null $order_signature_plan
 * @property int|null $order_signature_recurrency
 * @property int|null $order_signature_period
 * @property string|null $order_signature_status
 *
 * @package App\Models
 */
class WsEadOrder extends Model
{
	protected $table = 'ws_ead_orders';
	protected $primaryKey = 'order_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'course_id' => 'int',
		'order_id' => 'int',
		'order_product_id' => 'int',
		'order_callback_type' => 'int',
		'order_price' => 'float',
		'order_cms_marketplace' => 'float',
		'order_cms_vendor' => 'float',
		'order_delivered' => 'int',
		'order_signature_recurrency' => 'int',
		'order_signature_period' => 'int'
	];

	protected $dates = [
		'order_purchase_date',
		'order_warranty_date',
		'order_confirmation_purchase_date',
		'order_chargeback'
	];

	protected $fillable = [
		'user_id',
		'course_id',
		'order_product_id',
		'order_transaction',
		'order_callback_type',
		'order_off',
		'order_price',
		'order_currency',
		'order_payment_type',
		'order_purchase_date',
		'order_warranty_date',
		'order_confirmation_purchase_date',
		'order_sck',
		'order_src',
		'order_aff',
		'order_aff_name',
		'order_cms_aff',
		'order_cms_marketplace',
		'order_cms_vendor',
		'order_status',
		'order_chargeback',
		'order_delivered',
		'order_signature',
		'order_signature_plan',
		'order_signature_recurrency',
		'order_signature_period',
		'order_signature_status'
	];
}
