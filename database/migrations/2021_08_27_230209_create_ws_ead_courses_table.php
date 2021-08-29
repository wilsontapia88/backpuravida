<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_author')->nullable(); //id da tabela users como forekey
            $table->string('course_segment')->nullable();
            $table->string('course_parent')->nullable();
            $table->string('course_title')->nullable();
            $table->string('course_headline')->nullable();
            $table->string('course_destaque_esquerda')->nullable();
            $table->string('course_destaque_direita')->nullable();
            $table->string('course_color')->nullable();
            $table->string('course_vv')->nullable();
            $table->string('course_vv_module_columns')->nullable();
            $table->string('course_biography_background')->nullable();
            $table->text('course_biography_description')->nullable();
            $table->string('course_vv_title_gallery')->nullable();
            $table->string('course_vv_gallery')->nullable();
            $table->text('course_vv_faq')->nullable();
            $table->text('course_desc')->nullable();
            $table->string('course_content_title')->nullable();
            $table->string('course_name')->nullable();
            $table->string('course_cover')->nullable();
            $table->string('course_logo')->nullable();
            $table->string('course_logo_header')->nullable();
            $table->string('course_background')->nullable();
            $table->text('course_desc_vv_background')->nullable();
            $table->string('course_open')->nullable();
            $table->string('course_created')->nullable();
            $table->string('course_updated')->nullable();
            $table->string('course_status')->nullable();
            $table->string('course_order')->nullable();
            $table->string('course_vendor_id')->nullable();
            $table->string('course_new_vendor_id')->nullable();
            $table->string('course_vendor_access')->nullable();
            $table->string('course_vendor_price')->nullable();
            $table->string('course_vendor_price_optin')->nullable();
            $table->string('course_vendor_price_discount')->nullable();
            $table->string('course_vendor_price_discount_optin')->nullable();
            $table->string('course_vendor_page')->nullable();
            $table->string('course_vendor_checkout')->nullable();
            $table->string('course_new_vendor_checkout')->nullable();
            $table->string('course_vendor_renew')->nullable();
            $table->string('course_certification_workload')->nullable();
            $table->string('course_certification_request')->nullable();
            $table->string('course_certification_mockup')->nullable();
            $table->string('course_certification_color')->nullable();
            $table->string('course_vendor_video')->nullable();
            $table->string('course_mail_subject')->nullable();
            $table->text('course_mail_content')->nullable();
            $table->string('course_vinculo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_courses');
    }
}
