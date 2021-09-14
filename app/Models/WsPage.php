<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsPage
 * 
 * @property int $page_id
 * @property string|null $page_title
 * @property string|null $page_subtitle
 * @property string|null $page_name
 * @property string|null $page_content
 * @property Carbon|null $page_date
 * @property Carbon|null $page_revision
 * @property int|null $page_order
 * @property int $page_status
 * @property string|null $page_cover
 *
 * @package App\Models
 */
class WsPage extends Model
{
	protected $table = 'ws_pages';
	protected $primaryKey = 'page_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'page_id' => 'int',
		'page_order' => 'int',
		'page_status' => 'int'
	];

	protected $dates = [
		'page_date',
		'page_revision'
	];

	protected $fillable = [
		'page_title',
		'page_subtitle',
		'page_name',
		'page_content',
		'page_date',
		'page_revision',
		'page_order',
		'page_status',
		'page_cover'
	];
}
