<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PvRedirection
 * 
 * @property int $redirection_id
 * @property string $redirection_title
 * @property string $redirection_name
 * @property string $redirection_url
 * @property string $redirection_destination
 * @property int $redirection_status
 * @property int $redirection_by
 * @property Carbon $redirection_created
 *
 * @package App\Models
 */
class PvRedirection extends Model
{
	protected $table = 'pv_redirection';
	protected $primaryKey = 'redirection_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'redirection_id' => 'int',
		'redirection_status' => 'int',
		'redirection_by' => 'int'
	];

	protected $dates = [
		'redirection_created'
	];

	protected $fillable = [
		'redirection_title',
		'redirection_name',
		'redirection_url',
		'redirection_destination',
		'redirection_status',
		'redirection_by',
		'redirection_created'
	];
}
