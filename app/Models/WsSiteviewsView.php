<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsSiteviewsView
 * 
 * @property int $views_id
 * @property Carbon|null $views_date
 * @property float|null $views_users
 * @property float|null $views_views
 * @property float|null $views_pages
 *
 * @package App\Models
 */
class WsSiteviewsView extends Model
{
	protected $table = 'ws_siteviews_views';
	protected $primaryKey = 'views_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'views_id' => 'int',
		'views_users' => 'float',
		'views_views' => 'float',
		'views_pages' => 'float'
	];

	protected $dates = [
		'views_date'
	];

	protected $fillable = [
		'views_date',
		'views_users',
		'views_views',
		'views_pages'
	];
}
