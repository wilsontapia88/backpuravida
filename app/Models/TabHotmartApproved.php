<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TabHotmartApproved
 * 
 * @property string|null $email_hotmart
 *
 * @package App\Models
 */
class TabHotmartApproved extends Model
{
	protected $table = 'tab_hotmart_approved';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'email_hotmart'
	];
}
