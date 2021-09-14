<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadCoursesMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_courses_material', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->index('wc_download_course');
            $table->unsignedInteger('module_id')->index('wc_download_module');
            $table->unsignedInteger('class_id')->nullable()->index('wc_download_class');
            $table->unsignedInteger('material_id')->primary();
            $table->string('material_title')->nullable();
            $table->string('material_thumb')->nullable();
            $table->string('material_file')->nullable();
            $table->string('material_type', 10)->nullable();
            $table->integer('material_order')->default(1);
            $table->timestamp('material_sended')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_courses_material');
    }
}
