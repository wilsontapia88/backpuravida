<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_classes', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->increments('class_id');
            $table->string('class_title')->nullable();
            $table->string('class_thumb')->nullable();
            $table->string('class_name')->nullable();
            $table->string('class_video')->nullable();
            $table->decimal('class_time', 10,0)->nullable();
            $table->integer('class_order')->nullable();
            $table->char('class_active', 1);
            $table->string('class_material')->nullable();
            $table->text('class_desc')->nullable();
            $table->integer('class_support')->nullable();
            $table->timestamp('class_created')->nullable();
            $table->timestamp('class_updated')->nullable();
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade');
            $table->foreign('module_id')->references('module_id')->on('ws_ead_modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_classes');
    }
}
