<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WsEadStudentClasses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_student_classes', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('course_id')->nullable();
            $table->unsignedInteger('class_id')->nullable();
            $table->unsignedInteger('enrollment_id')->nullable();
            $table->increments('student_class_id');

            $table->integer('student_class_views')->nullable();
            $table->timestamp('student_class_play')->nullable();
            $table->integer('student_class_free')->nullable();
            $table->integer('student_class_seconds')->nullable();
            $table->timestamp('student_class_check')->nullable();

            $table->foreign('user_id')->references('user_id')->on('ws_users')->onDelete('cascade');
            $table->foreign('course_id')->references('course_id')->on('ws_ead_courses')->onDelete('cascade');
            $table->foreign('class_id')->references('class_id')->on('ws_ead_classes')->onDelete('cascade');
            $table->foreign('enrollment_id')->references('enrollment_id')->on('ws_ead_enrollments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ws_ead_student_classes');
    }
}
