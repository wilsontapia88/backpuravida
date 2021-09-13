<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadStudentDownloads extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_student_downloads', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('course_id')->nullable();
            $table->unsignedInteger('class_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->unsignedInteger('material_id')->nullable();
            $table->increments('download_id');

            $table->string('user_ip')->nullable();
            $table->string('download_file')->nullable();
            $table->string('download_filename', 2555)->nullable();
            $table->timestamp('download_date')->nullable();
            $table->string('user_location')->nullable();
            $table->string('download_filetype')->nullable();

            $table->foreign('user_id')->references('user_id')->on('ws_users')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade');
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
        Schema::dropIfExists('ws_ead_student_downloads');
    }
}
