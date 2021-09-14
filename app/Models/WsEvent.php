<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEvent
 * 
 * @property int $event_id
 * @property int $event_by
 * @property string|null $event_title
 * @property string|null $event_name
 * @property string|null $event_cover
 * @property string|null $event_image_1
 * @property string|null $event_image_2
 * @property string|null $event_image_3
 * @property string|null $event_image_4
 * @property string|null $event_image_5
 * @property string|null $event_headline
 * @property string|null $event_description
 * @property string|null $event_description_col1
 * @property string|null $event_description_col2
 * @property string|null $event_comments
 * @property string|null $event_comments_more
 * @property string|null $event_city
 * @property string|null $event_state
 * @property string|null $event_country
 * @property string|null $event_location
 * @property float|null $event_price
 * @property string|null $event_installments
 * @property string|null $event_conditions
 * @property int|null $event_tickets
 * @property int|null $event_available
 * @property Carbon|null $event_date
 * @property Carbon|null $event_date_end
 * @property int|null $event_status
 * @property Carbon|null $event_created
 *
 * @package App\Models
 */
class WsEvent extends Model
{
	protected $table = 'ws_events';
	protected $primaryKey = 'event_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'event_id' => 'int',
		'event_by' => 'int',
		'event_price' => 'float',
		'event_tickets' => 'int',
		'event_available' => 'int',
		'event_status' => 'int'
	];

	protected $dates = [
		'event_date',
		'event_date_end',
		'event_created'
	];

	protected $fillable = [
		'event_by',
		'event_title',
		'event_name',
		'event_cover',
		'event_image_1',
		'event_image_2',
		'event_image_3',
		'event_image_4',
		'event_image_5',
		'event_headline',
		'event_description',
		'event_description_col1',
		'event_description_col2',
		'event_comments',
		'event_comments_more',
		'event_city',
		'event_state',
		'event_country',
		'event_location',
		'event_price',
		'event_installments',
		'event_conditions',
		'event_tickets',
		'event_available',
		'event_date',
		'event_date_end',
		'event_status',
		'event_created'
	];
}
