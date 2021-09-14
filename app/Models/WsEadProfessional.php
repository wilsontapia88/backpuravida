<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadProfessional
 * 
 * @property int $pro_id
 * @property string|null $pro_photo
 * @property string|null $pro_thumb
 * @property string|null $pro_name
 * @property string|null $pro_lastname
 * @property string|null $pro_prof
 * @property string|null $pro_city
 * @property string|null $pro_state
 * @property string|null $pro_phone
 * @property string|null $pro_email
 * @property string|null $pro_site
 * @property string|null $pro_face
 * @property string|null $pro_insta
 * @property int|null $pro_status
 * @property string|null $pro_form
 * @property Carbon|null $pro_created
 *
 * @package App\Models
 */
class WsEadProfessional extends Model
{
	protected $table = 'ws_ead_professionals';
	protected $primaryKey = 'pro_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'pro_id' => 'int',
		'pro_status' => 'int'
	];

	protected $dates = [
		'pro_created'
	];

	protected $fillable = [
		'pro_photo',
		'pro_thumb',
		'pro_name',
		'pro_lastname',
		'pro_prof',
		'pro_city',
		'pro_state',
		'pro_phone',
		'pro_email',
		'pro_site',
		'pro_face',
		'pro_insta',
		'pro_status',
		'pro_form',
		'pro_created'
	];
}
