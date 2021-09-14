<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsUsersAddress
 * 
 * @property int $user_id
 * @property int $addr_id
 * @property int|null $addr_key
 * @property string|null $addr_name
 * @property string|null $addr_zipcode
 * @property string|null $addr_street
 * @property string|null $addr_number
 * @property string|null $addr_complement
 * @property string|null $addr_district
 * @property string|null $addr_city
 * @property string|null $addr_state
 * @property string|null $addr_country
 *
 * @package App\Models
 */
class WsUsersAddress extends Model
{
	protected $table = 'ws_users_address';
	protected $primaryKey = 'addr_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'addr_id' => 'int',
		'addr_key' => 'int'
	];

	protected $fillable = [
		'user_id',
		'addr_key',
		'addr_name',
		'addr_zipcode',
		'addr_street',
		'addr_number',
		'addr_complement',
		'addr_district',
		'addr_city',
		'addr_state',
		'addr_country'
	];
}
