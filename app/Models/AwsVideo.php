<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AwsVideo
 * 
 * @property int $id
 * @property string $codigo
 * @property string $url
 *
 * @package App\Models
 */
class AwsVideo extends Model
{
	protected $table = 'aws_videos';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'codigo',
		'url'
	];
}
