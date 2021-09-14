<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsOrdersItem
 * 
 * @property int $order_id
 * @property int|null $pdt_id
 * @property int|null $stock_id
 * @property int $item_id
 * @property string|null $item_name
 * @property float|null $item_price
 * @property float|null $item_amount
 *
 * @package App\Models
 */
class WsOrdersItem extends Model
{
	protected $table = 'ws_orders_items';
	protected $primaryKey = 'item_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'pdt_id' => 'int',
		'stock_id' => 'int',
		'item_id' => 'int',
		'item_price' => 'float',
		'item_amount' => 'float'
	];

	protected $fillable = [
		'order_id',
		'pdt_id',
		'stock_id',
		'item_name',
		'item_price',
		'item_amount'
	];
}
