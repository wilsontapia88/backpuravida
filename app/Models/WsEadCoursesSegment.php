<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadCoursesSegment
 * 
 * @property int $segment_id
 * @property string|null $segment_title
 * @property string|null $segment_name
 * @property string|null $segment_desc
 * @property int|null $segment_order
 * @property string|null $segment_icon
 * @property Carbon|null $segment_created
 *
 * @package App\Models
 */
class WsEadCoursesSegment extends Model
{
	protected $table = 'ws_ead_courses_segments';
	protected $primaryKey = 'segment_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'segment_id' => 'int',
		'segment_order' => 'int'
	];

	protected $dates = [
		'segment_created'
	];

	protected $fillable = [
		'segment_title',
		'segment_name',
		'segment_desc',
		'segment_order',
		'segment_icon',
		'segment_created'
	];
}
