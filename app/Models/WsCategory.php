<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsCategory
 * 
 * @property int $category_id
 * @property int|null $category_parent
 * @property string|null $category_name
 * @property string|null $category_title
 * @property string|null $category_content
 * @property Carbon|null $category_date
 *
 * @package App\Models
 */
class WsCategory extends Model
{
	protected $table = 'ws_categories';
	protected $primaryKey = 'category_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int',
		'category_parent' => 'int'
	];

	protected $dates = [
		'category_date'
	];

	protected $fillable = [
		'category_parent',
		'category_name',
		'category_title',
		'category_content',
		'category_date'
	];
}
