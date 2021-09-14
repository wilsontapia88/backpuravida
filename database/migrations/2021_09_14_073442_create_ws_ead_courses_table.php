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
            $table->unsignedInteger('course_id')->primary();
            $table->unsignedInteger('course_author')->nullable()->index('wc_course_author');
            $table->unsignedInteger('course_segment')->nullable()->index('wc_course_segment');
            $table->integer('course_parent');
            $table->string('course_title')->nullable();
            $table->string('course_headline')->nullable();
            $table->string('course_destaque_esquerda');
            $table->string('course_destaque_direita');
            $table->string('course_color')->nullable();
            $table->string('course_vv', 25);
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
            $table->timestamp('course_updated')->useCurrent();
            $table->integer('course_status')->default(0);
            $table->integer('course_order')->nullable();
            $table->string('course_vendor_id', 100)->nullable();
            $table->string('course_new_vendor_id', 100)->nullable();
            $table->integer('course_vendor_access')->nullable();
            $table->decimal('course_vendor_price', 11)->nullable();
            $table->string('course_vendor_price_optin', 50)->nullable();
            $table->integer('course_vendor_price_discount')->nullable();
            $table->string('course_vendor_price_discount_optin', 50)->nullable();
            $table->string('course_vendor_page')->nullable();
            $table->string('course_vendor_checkout')->nullable();
            $table->string('course_new_vendor_checkout')->nullable();
            $table->string('course_vendor_renew')->nullable();
            $table->integer('course_certification_workload')->nullable();
            $table->integer('course_certification_request')->nullable();
            $table->string('course_certification_mockup')->nullable();
            $table->string('course_certification_color', 25);
            $table->string('course_vendor_video')->nullable();
            $table->string('course_mail_subject')->nullable();
            $table->text('course_mail_content')->nullable();
            $table->integer('course_vinculo');
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
