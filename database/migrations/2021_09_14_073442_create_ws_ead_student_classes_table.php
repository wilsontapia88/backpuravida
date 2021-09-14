<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWsEadStudentClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ws_ead_student_classes', function (Blueprint $table) {
            $table->unsignedInteger('user_id')->nullable()->index('wc_student_class_user');
            $table->unsignedInteger('course_id')->nullable()->index('wc_student_class_course');
            $table->unsignedInteger('class_id')->nullable()->index('wc_student_class');
            $table->unsignedInteger('enrollment_id')->nullable()->index('wc_student_class_enroll');
            $table->unsignedInteger('student_class_id')->primary();
            $table->integer('student_class_views')->nullable();
            $table->timestamp('student_class_play')->nullable();
            $table->integer('student_class_free')->nullable();
            $table->integer('student_class_seconds')->nullable();
            $table->timestamp('student_class_check')->nullable();
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
