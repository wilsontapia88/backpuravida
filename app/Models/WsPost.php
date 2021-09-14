<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsPost
 * 
 * @property int $post_id
 * @property string $post_name
 * @property string|null $post_title
 * @property string|null $post_subtitle
 * @property string|null $post_content
 * @property string|null $post_cover
 * @property string|null $post_video
 * @property Carbon|null $post_date
 * @property int|null $post_author
 * @property int|null $post_category
 * @property string|null $post_category_parent
 * @property float|null $post_views
 * @property Carbon|null $post_lastview
 * @property int $post_status
 * @property string|null $post_type
 * @property int|null $post_instant_article
 * @property int|null $post_amp
 * @property string|null $post_tags
 *
 * @package App\Models
 */
class WsPost extends Model
{
	protected $table = 'ws_posts';
	protected $primaryKey = 'post_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'post_id' => 'int',
		'post_author' => 'int',
		'post_category' => 'int',
		'post_views' => 'float',
		'post_status' => 'int',
		'post_instant_article' => 'int',
		'post_amp' => 'int'
	];

	protected $dates = [
		'post_date',
		'post_lastview'
	];

	protected $fillable = [
		'post_name',
		'post_title',
		'post_subtitle',
		'post_content',
		'post_cover',
		'post_video',
		'post_date',
		'post_author',
		'post_category',
		'post_category_parent',
		'post_views',
		'post_lastview',
		'post_status',
		'post_type',
		'post_instant_article',
		'post_amp',
		'post_tags'
	];
}
