<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsSiteviewsOnline
 * 
 * @property int $online_id
 * @property int|null $online_user
 * @property string|null $online_name
 * @property Carbon|null $online_startview
 * @property Carbon|null $online_endview
 * @property string|null $online_ip
 * @property string|null $online_url
 * @property string|null $online_agent
 *
 * @package App\Models
 */
class WsSiteviewsOnline extends Model
{
	protected $table = 'ws_siteviews_online';
	protected $primaryKey = 'online_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'online_id' => 'int',
		'online_user' => 'int'
	];

	protected $dates = [
		'online_startview',
		'online_endview'
	];

	protected $fillable = [
		'online_user',
		'online_name',
		'online_startview',
		'online_endview',
		'online_ip',
		'online_url',
		'online_agent'
	];
}
