<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsSearch
 * 
 * @property int $search_id
 * @property string|null $search_key
 * @property float|null $search_count
 * @property Carbon|null $search_date
 * @property Carbon|null $search_commit
 *
 * @package App\Models
 */
class WsSearch extends Model
{
	protected $table = 'ws_search';
	protected $primaryKey = 'search_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'search_id' => 'int',
		'search_count' => 'float'
	];

	protected $dates = [
		'search_date',
		'search_commit'
	];

	protected $fillable = [
		'search_key',
		'search_count',
		'search_date',
		'search_commit'
	];
}
