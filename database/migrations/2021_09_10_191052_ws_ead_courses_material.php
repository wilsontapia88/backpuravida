<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadCoursesMaterial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_courses_material', function (Blueprint $table) {
            $table->unsignedInteger('course_id');
            $table->unsignedInteger('module_id');
            $table->unsignedInteger('class_id')->nullable();
            $table->increments('material_id');

            $table->string('material_title')->nullable();
            $table->string('material_thumb')->nullable();
            $table->string('material_file')->nullable();
            $table->string('material_type')->nullable();
            $table->integer('material_order')->default(1);
            $table->timestamp('material_sended')->nullable();

            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade');
            $table->foreign('module_id')->references('module_id')->on('ws_ead_modules')->onDelete('cascade');
            $table->foreign('class_id')->references('class_id')->on('ws_ead_classes')->onDelete('cascade');


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
