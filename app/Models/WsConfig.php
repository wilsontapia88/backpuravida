<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WsConfig
 * 
 * @property int $conf_id
 * @property string|null $conf_key
 * @property string|null $conf_value
 * @property string|null $conf_type
 *
 * @package App\Models
 */
class WsConfig extends Model
{
	protected $table = 'ws_config';
	protected $primaryKey = 'conf_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'conf_id' => 'int'
	];

	protected $fillable = [
		'conf_key',
		'conf_value',
		'conf_type'
	];
}
