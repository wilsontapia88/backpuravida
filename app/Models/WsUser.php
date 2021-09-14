<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsUser
 * 
 * @property int $user_id
 * @property string|null $user_thumb
 * @property string|null $user_name
 * @property string|null $user_lastname
 * @property string|null $user_document
 * @property int|null $user_document_check
 * @property int|null $user_genre
 * @property Carbon|null $user_datebirth
 * @property string|null $user_telephone
 * @property string|null $user_cell
 * @property string $user_email
 * @property string $user_password
 * @property string|null $user_channel
 * @property Carbon|null $user_registration
 * @property Carbon|null $user_lastupdate
 * @property Carbon|null $user_lastaccess
 * @property string|null $user_login
 * @property string|null $user_login_cookie
 * @property int $user_level
 * @property string|null $user_facebook
 * @property string|null $user_twitter
 * @property string|null $user_youtube
 * @property string|null $user_google
 * @property string|null $user_document_name
 * @property string|null $user_blocking_reason
 * @property int|null $user_agreement
 * @property int|null $user_videointro
 *
 * @package App\Models
 */
class WsUser extends Model
{
	protected $table = 'ws_users';
	protected $primaryKey = 'user_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'user_document_check' => 'int',
		'user_genre' => 'int',
		'user_level' => 'int',
		'user_agreement' => 'int',
		'user_videointro' => 'int'
	];

	protected $dates = [
		'user_datebirth',
		'user_registration',
		'user_lastupdate',
		'user_lastaccess'
	];

	protected $hidden = [
		'user_password'
	];

	protected $fillable = [
		'user_thumb',
		'user_name',
		'user_lastname',
		'user_document',
		'user_document_check',
		'user_genre',
		'user_datebirth',
		'user_telephone',
		'user_cell',
		'user_email',
		'user_password',
		'user_channel',
		'user_registration',
		'user_lastupdate',
		'user_lastaccess',
		'user_login',
		'user_login_cookie',
		'user_level',
		'user_facebook',
		'user_twitter',
		'user_youtube',
		'user_google',
		'user_document_name',
		'user_blocking_reason',
		'user_agreement',
		'user_videointro'
	];
}
