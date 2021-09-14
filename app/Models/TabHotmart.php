<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TabHotmart
 * 
 * @property string|null $email_hotmart
 *
 * @package App\Models
 */
class TabHotmart extends Model
{
	protected $table = 'tab_hotmart';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'email_hotmart'
	];
}
