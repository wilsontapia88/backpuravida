<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsProductsCategory
 * 
 * @property int $cat_id
 * @property int|null $cat_parent
 * @property string|null $cat_title
 * @property string|null $cat_name
 * @property string|null $cat_sizes
 * @property Carbon|null $cat_created
 *
 * @package App\Models
 */
class WsProductsCategory extends Model
{
	protected $table = 'ws_products_categories';
	protected $primaryKey = 'cat_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cat_id' => 'int',
		'cat_parent' => 'int'
	];

	protected $dates = [
		'cat_created'
	];

	protected $fillable = [
		'cat_parent',
		'cat_title',
		'cat_name',
		'cat_sizes',
		'cat_created'
	];
}
