<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TabHotmartFull
 * 
 * @property string|null $email_hotmart
 *
 * @package App\Models
 */
class TabHotmartFull extends Model
{
	protected $table = 'tab_hotmart_full';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'email_hotmart'
	];
}
