<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WsEadCourse
 * 
 * @property int $course_id
 * @property int|null $course_author
 * @property int|null $course_segment
 * @property int $course_parent
 * @property string|null $course_title
 * @property string|null $course_headline
 * @property string $course_destaque_esquerda
 * @property string $course_destaque_direita
 * @property string|null $course_color
 * @property string $course_vv
 * @property string|null $course_vv_module_columns
 * @property string|null $course_biography_background
 * @property string|null $course_biography_description
 * @property string $course_vv_title_gallery
 * @property int|null $course_vv_gallery
 * @property string|null $course_vv_faq
 * @property string|null $course_desc
 * @property string $course_content_title
 * @property string|null $course_name
 * @property string|null $course_cover
 * @property string|null $course_logo
 * @property string|null $course_logo_header
 * @property string|null $course_background
 * @property string $course_desc_vv_background
 * @property Carbon|null $course_open
 * @property Carbon|null $course_created
 * @property Carbon $course_updated
 * @property int $course_status
 * @property int|null $course_order
 * @property string|null $course_vendor_id
 * @property string|null $course_new_vendor_id
 * @property int|null $course_vendor_access
 * @property float|null $course_vendor_price
 * @property string|null $course_vendor_price_optin
 * @property int|null $course_vendor_price_discount
 * @property string|null $course_vendor_price_discount_optin
 * @property string|null $course_vendor_page
 * @property string|null $course_vendor_checkout
 * @property string|null $course_new_vendor_checkout
 * @property string|null $course_vendor_renew
 * @property int|null $course_certification_workload
 * @property int|null $course_certification_request
 * @property string|null $course_certification_mockup
 * @property string $course_certification_color
 * @property string|null $course_vendor_video
 * @property string|null $course_mail_subject
 * @property string|null $course_mail_content
 * @property int $course_vinculo
 *
 * @package App\Models
 */
class WsEadCourse extends Model
{
	protected $table = 'ws_ead_courses';
	protected $primaryKey = 'course_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'course_id' => 'int',
		'course_author' => 'int',
		'course_segment' => 'int',
		'course_parent' => 'int',
		'course_vv_gallery' => 'int',
		'course_status' => 'int',
		'course_order' => 'int',
		'course_vendor_access' => 'int',
		'course_vendor_price' => 'float',
		'course_vendor_price_discount' => 'int',
		'course_certification_workload' => 'int',
		'course_certification_request' => 'int',
		'course_vinculo' => 'int'
	];

	protected $dates = [
		'course_open',
		'course_created',
		'course_updated'
	];

	protected $fillable = [
		'course_author',
		'course_segment',
		'course_parent',
		'course_title',
		'course_headline',
		'course_destaque_esquerda',
		'course_destaque_direita',
		'course_color',
		'course_vv',
		'course_vv_module_columns',
		'course_biography_background',
		'course_biography_description',
		'course_vv_title_gallery',
		'course_vv_gallery',
		'course_vv_faq',
		'course_desc',
		'course_content_title',
		'course_name',
		'course_cover',
		'course_logo',
		'course_logo_header',
		'course_background',
		'course_desc_vv_background',
		'course_open',
		'course_created',
		'course_updated',
		'course_status',
		'course_order',
		'course_vendor_id',
		'course_new_vendor_id',
		'course_vendor_access',
		'course_vendor_price',
		'course_vendor_price_optin',
		'course_vendor_price_discount',
		'course_vendor_price_discount_optin',
		'course_vendor_page',
		'course_vendor_checkout',
		'course_new_vendor_checkout',
		'course_vendor_renew',
		'course_certification_workload',
		'course_certification_request',
		'course_certification_mockup',
		'course_certification_color',
		'course_vendor_video',
		'course_mail_subject',
		'course_mail_content',
		'course_vinculo'
	];
}
