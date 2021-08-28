<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ws_ead_course extends Model
{
    protected $fillable = [
        'course_id',
        'course_author',
        'course_segment',
        'course_parent',
        'course_title',
        'course_headline ',
        'course_destaque_esquerda',
        'course_destaque_direita',
        'course_color ',
        'course_vv',
        'course_vv_module_columns',
        'course_biography_background ',
        'course_biography_description',
        'course_vv_title_gallery',
        'course_vv_gallery',
        'course_vv_faq',
        'course_desc',
        'course_content_title',
        'course_name ',
        'course_cover ',
        'course_logo ',
        'course_logo_header ',
        'course_background ',
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
        'course_vendor_page ',
        'course_vendor_checkout ',
        'course_new_vendor_checkout ',
        'course_vendor_renew ',
        'course_certification_workload',
        'course_certification_request',
        'course_certification_mockup ',
        'course_certification_color',
        'course_vendor_video ',
        'course_mail_subject ',
        'course_mail_content',
        'course_vinculo',
    ];
}
