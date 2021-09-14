<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsProductsStock
 * 
 * @property int $stock_id
 * @property int $pdt_id
 * @property string $stock_code
 * @property float $stock_inventory
 * @property float $stock_sold
 *
 * @package App\Models
 */
class WsProductsStock extends Model
{
	protected $table = 'ws_products_stock';
	protected $primaryKey = 'stock_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'stock_id' => 'int',
		'pdt_id' => 'int',
		'stock_inventory' => 'float',
		'stock_sold' => 'float'
	];

	protected $fillable = [
		'pdt_id',
		'stock_code',
		'stock_inventory',
		'stock_sold'
	];
}
