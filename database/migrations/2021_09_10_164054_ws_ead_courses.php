<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_courses', function (Blueprint $table) {
            $table->increments('course_id');
            $table->unsignedInteger('course_author')->nullable();
            $table->unsignedInteger('course_segment')->nullable();
            $table->integer('course_parent');
            $table->string('course_title')->nullable();
            $table->string('course_headline')->nullable();
            $table->string('course_destaque_esquerda');
            $table->string('course_destaque_direita');
            $table->string('course_color')->nullable();
            $table->string('course_vv');
            $table->char('course_vv_module_columns', 1)->nullable();
            $table->string('course_biography_background')->nullable();
            $table->text('course_biography_description')->nullable();
            $table->text('course_vv_title_gallery');
            $table->integer('course_vv_gallery')->nullable();
            $table->text('course_vv_faq')->nullable();
            $table->text('course_desc')->nullable();
            $table->string('course_content_title');
            $table->string('course_name')->nullable();
            $table->string('course_cover')->nullable();
            $table->string('course_logo')->nullable();
            $table->string('course_logo_header')->nullable();
            $table->string('course_background')->nullable();
            $table->string('course_desc_vv_background');
            $table->timestamp('course_open')->nullable();
            $table->timestamp('course_created')->nullable();
            $table->timestamp('course_updated')->nullable();
            $table->integer('course_status')->default(0);
            $table->integer('course_order')->nullable();
            $table->string('course_vendor_id')->nullable();
            $table->string('course_new_vendor_id')->nullable();
            $table->integer('course_vendor_access')->nullable();
            $table->decimal('course_vendor_price', 11,2)->nullable();
            $table->string('course_vendor_price_optin')->nullable();
            $table->integer('course_vendor_price_discount')->nullable();
            $table->string('course_vendor_price_discount_optin')->nullable();
            $table->string('course_vendor_page')->nullable();
            $table->string('course_vendor_checkout')->nullable();
            $table->string('course_new_vendor_checkout')->nullable();
            $table->string('course_vendor_renew')->nullable();
            $table->integer('course_certification_workload')->nullable();
            $table->integer('course_certification_request' )->nullable();
            $table->string('course_certification_mockup')->nullable();
            $table->string('course_certification_color');
            $table->string('course_vendor_video')->nullable();
            $table->string('course_mail_subject')->nullable();
            $table->text('course_mail_content')->nullable();
            $table->integer('course_vinculo');

            $table->foreign('course_author')->references('user_id')->on('ws_users')->onDelete('cascade');
            $table->foreign('course_segment')->references('segment_id')->on('ws_ead_courses_segments')->onDelete('cascade');
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
