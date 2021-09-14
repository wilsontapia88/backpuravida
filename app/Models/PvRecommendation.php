<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PvRecommendation
 * 
 * @property int $rec_id
 * @property string $rec_abv
 * @property string $rec_title
 * @property string $rec_name
 * @property string $rec_specialty
 * @property string $rec_appointment
 * @property string $rec_local
 * @property string $rec_phone
 * @property string $rec_email
 * @property string $rec_website
 * @property string $rec_instagram
 * @property string $rec_additional_info
 * @property int $rec_by
 * @property Carbon $rec_created
 * @property int $rec_status
 *
 * @package App\Models
 */
class PvRecommendation extends Model
{
	protected $table = 'pv_recommendation';
	protected $primaryKey = 'rec_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rec_id' => 'int',
		'rec_by' => 'int',
		'rec_status' => 'int'
	];

	protected $dates = [
		'rec_created'
	];

	protected $fillable = [
		'rec_abv',
		'rec_title',
		'rec_name',
		'rec_specialty',
		'rec_appointment',
		'rec_local',
		'rec_phone',
		'rec_email',
		'rec_website',
		'rec_instagram',
		'rec_additional_info',
		'rec_by',
		'rec_created',
		'rec_status'
	];
}
