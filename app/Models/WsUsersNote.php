<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsUsersNote
 * 
 * @property int $note_id
 * @property int|null $user_id
 * @property int|null $admin_id
 * @property string|null $note_text
 * @property Carbon|null $note_datetime
 * @property int|null $note_status
 *
 * @package App\Models
 */
class WsUsersNote extends Model
{
	protected $table = 'ws_users_notes';
	protected $primaryKey = 'note_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'note_id' => 'int',
		'user_id' => 'int',
		'admin_id' => 'int',
		'note_status' => 'int'
	];

	protected $dates = [
		'note_datetime'
	];

	protected $fillable = [
		'user_id',
		'admin_id',
		'note_text',
		'note_datetime',
		'note_status'
	];
}
