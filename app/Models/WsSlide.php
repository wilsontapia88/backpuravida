<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsSlide
 * 
 * @property int $slide_id
 * @property int $slide_status
 * @property string|null $slide_image
 * @property string|null $slide_title
 * @property string|null $slide_desc
 * @property string|null $slide_link
 * @property Carbon|null $slide_date
 * @property Carbon|null $slide_start
 * @property Carbon|null $slide_end
 *
 * @package App\Models
 */
class WsSlide extends Model
{
	protected $table = 'ws_slides';
	protected $primaryKey = 'slide_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'slide_id' => 'int',
		'slide_status' => 'int'
	];

	protected $dates = [
		'slide_date',
		'slide_start',
		'slide_end'
	];

	protected $fillable = [
		'slide_status',
		'slide_image',
		'slide_title',
		'slide_desc',
		'slide_link',
		'slide_date',
		'slide_start',
		'slide_end'
	];
}
