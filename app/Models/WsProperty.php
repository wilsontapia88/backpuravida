<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsProperty
 * 
 * @property int $realty_id
 * @property string|null $realty_cover
 * @property string|null $realty_title
 * @property string|null $realty_name
 * @property string|null $realty_ref
 * @property float|null $realty_price
 * @property string|null $realty_desc
 * @property int|null $realty_finality
 * @property int|null $realty_type
 * @property float|null $realty_builtarea
 * @property float|null $realty_totalarea
 * @property float|null $realty_bedrooms
 * @property float|null $realty_apartments
 * @property float|null $realty_bathrooms
 * @property float|null $realty_parkings
 * @property string|null $realty_particulars
 * @property int|null $realty_transaction
 * @property string|null $realty_state
 * @property string|null $realty_city
 * @property string|null $realty_district
 * @property Carbon|null $realty_date
 * @property int|null $realty_observation
 * @property int|null $realty_contact
 * @property int $realty_status
 * @property float $realty_views
 *
 * @package App\Models
 */
class WsProperty extends Model
{
	protected $table = 'ws_properties';
	protected $primaryKey = 'realty_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'realty_id' => 'int',
		'realty_price' => 'float',
		'realty_finality' => 'int',
		'realty_type' => 'int',
		'realty_builtarea' => 'float',
		'realty_totalarea' => 'float',
		'realty_bedrooms' => 'float',
		'realty_apartments' => 'float',
		'realty_bathrooms' => 'float',
		'realty_parkings' => 'float',
		'realty_transaction' => 'int',
		'realty_observation' => 'int',
		'realty_contact' => 'int',
		'realty_status' => 'int',
		'realty_views' => 'float'
	];

	protected $dates = [
		'realty_date'
	];

	protected $fillable = [
		'realty_cover',
		'realty_title',
		'realty_name',
		'realty_ref',
		'realty_price',
		'realty_desc',
		'realty_finality',
		'realty_type',
		'realty_builtarea',
		'realty_totalarea',
		'realty_bedrooms',
		'realty_apartments',
		'realty_bathrooms',
		'realty_parkings',
		'realty_particulars',
		'realty_transaction',
		'realty_state',
		'realty_city',
		'realty_district',
		'realty_date',
		'realty_observation',
		'realty_contact',
		'realty_status',
		'realty_views'
	];
}
