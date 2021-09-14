<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsProduct
 * 
 * @property int $pdt_id
 * @property string $pdt_code
 * @property int|null $pdt_parent
 * @property string|null $pdt_title
 * @property string|null $pdt_subtitle
 * @property string|null $pdt_name
 * @property string|null $pdt_hotlink
 * @property string|null $pdt_cover
 * @property string|null $pdt_content
 * @property float|null $pdt_price
 * @property float $pdt_inventory
 * @property float $pdt_delivered
 * @property int|null $pdt_brand
 * @property int|null $pdt_category
 * @property int|null $pdt_subcategory
 * @property float|null $pdt_offer_price
 * @property Carbon|null $pdt_offer_start
 * @property Carbon|null $pdt_offer_end
 * @property float $pdt_dimension_heigth
 * @property float $pdt_dimension_width
 * @property float $pdt_dimension_depth
 * @property float $pdt_dimension_weight
 * @property Carbon|null $pdt_created
 * @property float|null $pdt_views
 * @property Carbon|null $pdt_lastview
 * @property int $pdt_status
 *
 * @package App\Models
 */
class WsProduct extends Model
{
	protected $table = 'ws_products';
	protected $primaryKey = 'pdt_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pdt_id' => 'int',
		'pdt_parent' => 'int',
		'pdt_price' => 'float',
		'pdt_inventory' => 'float',
		'pdt_delivered' => 'float',
		'pdt_brand' => 'int',
		'pdt_category' => 'int',
		'pdt_subcategory' => 'int',
		'pdt_offer_price' => 'float',
		'pdt_dimension_heigth' => 'float',
		'pdt_dimension_width' => 'float',
		'pdt_dimension_depth' => 'float',
		'pdt_dimension_weight' => 'float',
		'pdt_views' => 'float',
		'pdt_status' => 'int'
	];

	protected $dates = [
		'pdt_offer_start',
		'pdt_offer_end',
		'pdt_created',
		'pdt_lastview'
	];

	protected $fillable = [
		'pdt_code',
		'pdt_parent',
		'pdt_title',
		'pdt_subtitle',
		'pdt_name',
		'pdt_hotlink',
		'pdt_cover',
		'pdt_content',
		'pdt_price',
		'pdt_inventory',
		'pdt_delivered',
		'pdt_brand',
		'pdt_category',
		'pdt_subcategory',
		'pdt_offer_price',
		'pdt_offer_start',
		'pdt_offer_end',
		'pdt_dimension_heigth',
		'pdt_dimension_width',
		'pdt_dimension_depth',
		'pdt_dimension_weight',
		'pdt_created',
		'pdt_views',
		'pdt_lastview',
		'pdt_status'
	];
}
